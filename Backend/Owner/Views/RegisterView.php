 <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Đăng ký</h1>
                  </div>
                  <form method="post" action="index.php?controller=login&action=registerPost">
                     <div class="form-group">
                      <input type="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="name" required placeholder="Nhập vào Tên">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputPhoneNumber" name="phonenumber" required placeholder="Nhập số điện thoại của bạn">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputAddress" name="address" required placeholder="Nhập địa chỉ của bạn">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputCMND" name="cmnd" required placeholder="Nhập CMND của bạn">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" required placeholder="Nhập vào Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" required placeholder="Nhập password của bạn">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Đăng ký</button>
                  </form>
                  <hr>
                  <div class="text-center">
                      <a href="index.php" class="signup-image-link">Home Page</a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>