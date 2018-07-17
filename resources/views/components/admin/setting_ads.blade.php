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
                  <th>User name</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Categories</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
              <tr>
                  <th>User name</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Categories</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
               
                <tr>
                  <td>Zorita Serrano</td>
                  <td>Website template</td>
                  <td>See my website template. With responsive design and modern style your site'll be 
                  diferent on market Make a contact with me: +316 9656546 - Zorita Serrano</td>
                  <td>Development</td>

                  <th><a href="#">Edit</a></th>
                  <th><a href="#">Delete</a></th>
                </tr>
                <tr>
                  <td>Danny Milosevic</td>
                  <td>Ios app</td>
                  <td>Danny Milosevic app development, see my offer on <www class="dfambusiness com"></www></td>
                  <td>Development  </td>

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
    <input type="email" nema="email" class="form-control" id="exampleFormControlInput1" readonly placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Choice category</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Development</option>
      <option>Recruitment</option>
      <option>Second Hand</option>
      
    </select>
 
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Title of ads</label>
    <input type="text" nema="title" class="form-control" id="exampleFormControlInput1" placeholder="title of ads">
 
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Description of ads</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <input type="submit" class="btn btn-danger" value="Edit user"/>
  </div>
</form>
</div>