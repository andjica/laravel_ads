<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

use App\Account;
use App\Purchase;

class PaymentController extends Controller
{
    private $_api_context;
    // private $price_pro;
    // private $price_super;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        //STAVLJA CENU U PROMENLJIVU
        // $this->price_pro = AccountType::find(2)->price; 

        //API
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    public function pro(Request $request)
    {

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Upgraded account to PRO')
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice('14.95'); 

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal('14.95');

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Upgrading your account to PRO at IEDERWATWILS website');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status-pro'))
            ->setCancelUrl(URL::to('status-pro'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
           
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/user_profile');

            } else {

                \Session::put('error', 'Some error occured, sorry for inconvenience');
                return Redirect::to('/user_profile');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        //STAVLJA PAYMENT ID U SESIJU 
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            // REDIREKCIJA NA PAYPAL
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/user_profile');

    }

    public function superPro(Request $request)
    {

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Upgraded account to SUPER-PRO')
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice('29.95'); 

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal('29.95');

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Upgrading your account to SUPER-PRO at IEDERWATWILS website');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status-super'))
            ->setCancelUrl(URL::to('status-super'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
           
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/user_profile');

            } else {

                \Session::put('error', 'Some error occured, sorry for inconvenience');
                return Redirect::to('/user_profile');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        //STAVLJA PAYMENT ID U SESIJU 
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            // REDIREKCIJA NA PAYPAL
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/user_profile');

    }

    public function getPaymentStatusPro()
    {
       
        // ID TRANSAKCIJE U SESIJU
        $payment_id = Session::get('paypal_payment_id');

        // BRISE IZ SESIJE
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/user_profile');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        //IZVRSAVANJE TRANSAKCIJE
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            \Session::put('success', 'Payment success');
            
            $user_account = Account::where('user_id',auth()->user()->id)->first();
            $user_account->account_type_id = 2;
            $user_account->valid_until = \Carbon\Carbon::now()->addMonth();
            $user_account->save();

            // $user = User::find(auth()->user()->id);
            // $user->account->account_type_id = 2;
            // $user->save();

            Purchase::create([
                'user_id' => auth()->user()->id,
                'bought' => '2',
                'date_of_purchase' => \Carbon\Carbon::now(),
                'valid_until' => \Carbon\Carbon::now()->addMonth()
            ]);

            return Redirect::to('/user_profile');

        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/user_profile');

    }

    public function getPaymentStatusSuper()
    {
       
        // ID TRANSAKCIJE U SESIJU
        $payment_id = Session::get('paypal_payment_id');

        // BRISE IZ SESIJE
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/user_profile');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        //IZVRSAVANJE TRANSAKCIJE
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            \Session::put('success', 'Payment success');
            
            $user_account = Account::where('user_id',auth()->user()->id)->first();
            $user_account->account_type_id = 3;
            $user_account->valid_until = \Carbon\Carbon::now()->addMonth();
            $user_account->save();

            Purchase::create([
                'user_id' => auth()->user()->id,
                'bought' => '3',
                'date_of_purchase' => \Carbon\Carbon::now(),
                'valid_until' => \Carbon\Carbon::now()->addMonth()
            ]);

            return Redirect::to('/user_profile');

        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/user_profile');

    }

}
