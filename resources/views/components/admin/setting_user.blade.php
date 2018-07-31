<div class="col-lg-9">
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table text-danger"></i> Users and Ads table - 
This table is intended for modification <b>account type</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead class="text-white bg-primary">
              <tr>
                  <th>Gebruikersnaam</th>
                  <th>Email</th>
                  <th>Titel</th>
                  <th>Categorie</th>
                  <th>Account type</th>
                  <th>Bewerk</th>
                  <th>Verwijder</th>
                </tr>
              </thead>
              <tfoot>
              <tr>
                  <th>Gebruikersnaam</th>
                  <th>Email</th>
                  <th>Titel</th>
                  <th>Categorie</th>
                  <th>Account type</th>
                  <th>Bewerk</th>
                  <th>Verwijder</th>
                </tr>
              </tfoot>
              <tbody>
               
                <tr>
                  <td>Zorita Serrano</td>
                  <td>zori@gmail.com</td>
                  <td>Website template</td>
                  <td>Development  </td>
                  <td><b>FREE</b></td>
                  <th><a href="#">Edit</a></th>
                  <th><a href="#">Delete</a></th>
                </tr>
                <tr>
                  <td>Danny Milosevic</td>
                  <td>danny7@gmail.com</td>
                  <td>Ios app</td>
                  <td>Development  </td>
                  <td><b>FREE</b></td>
                  <th><a href="#">Edit</a></th>
                  <th><a href="#">Delete</a></th>
                </tr>
                </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
</div>

<div class="col-lg-3">
<form>
<div class="card mb-3 bg-dark p-3 text-primary">
Put email from user you want to edit</div>
  <div class="form-group">
 
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" readonly placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kies een categorie</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Ontwikkeling</option>
      <option>Werving</option>
      <option>Tweede hands</option>
      
    </select>
 
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kies account type</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Gratis</option>
      <option>Pro</option>
      <option>Premium</option>
      
    </select>
 
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <input type="submit" class="btn btn-danger" value="Edit user"/>
  </div>
</form>
</div>