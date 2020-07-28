            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('Welcome/kirim');?>">
                <div class="form-group row">
                  
                  <div class="col-sm-6">
                    <input type="text" name="nama" class="form-control form-control-user"  placeholder="NAMA">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="produk" class="form-control form-control-user"  placeholder="PRODUK">
                  </div>
                </div>
                <div class="form-group">
                 
                  <input type="text" name="img_link"  class="form-control form-control-user"  placeholder="IMG_LINK">
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-6">
                    <input type="text" name="asal" class="form-control form-control-user"  placeholder="ASAL">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="harga" class="form-control form-control-user"  placeholder="HARGA">
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block">
                  Kirim Data
                </button>
              </form>
            </div>