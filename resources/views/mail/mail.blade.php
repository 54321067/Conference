
                  <form class="form-horizontal" action="{{ url('/sendemail/send'.$paper_id) }}" method="get" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class="form-group">
                        <label class="col-md-4 control-label">e-mail</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" name="Email" required autofocus>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">link</label>
                        <div class="col-md-6">
                           <input type="text" name="Link" class="form-control" required autofocus>
                        </div>
                     <div class="form-group">
                   <div class="col-md-6 col-md-offset-4">
                     <button type="submit" class="btn btn-primary">
                         Submit
                    </button>
                  </div>              
              </div>
                  </form>