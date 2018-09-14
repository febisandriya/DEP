<!-- @extends('superadmin.layouts.app') -->
@section('content')
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Form Role</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add New</strong> Role
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Role Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Role name" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Level</label></div>
                            <div class="col-12 col-md-9">
                              <select name="level" id="select" class="form-control">
                                <option value="0" disabled selected>Please select</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="3" placeholder="Description" class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Role Access</label></div>

                            <div class="col-lg-9">
                                <div class="card">
                                  <div class="card-header">
                                    <strong>Main Menu</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <div class="col col-md-12">
                                      <div class="form-check">
                                        @foreach($modules as $module)
                                        <div class="checkbox">
                                          <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">{{$module->name}}
                                          </label>
                                        </div>
                                        @foreach($module->Menus as $menu)
                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">{{$menu->name}}
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="new" value="1" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="update" value="1" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="delete" value="1" class="form-check-input">Delete
                                          </label>
                                        </div>
                                        @endforeach
                                        @endforeach

                                        <!-- <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">User Management
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>
                                      </div>

                                      <div class="form-check">
                                        <div class="checkbox">
                                          <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Maintenance Company Management
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Reg. Maintenance
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>

                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Reg. Technical
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>

                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Reg. Officer
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>
                                      </div>

                                      <div class="form-check">
                                        <div class="checkbox">
                                          <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Company Branch Store
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Company
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>

                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Branch
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>

                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Store
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>
                                      </div>

                                      <div class="form-check">
                                        <div class="checkbox">
                                          <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Project Management
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Reg. Project
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>

                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Requirement
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>

                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Distributor
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>

                                        <div class="checkbox col-md-4">
                                          <label for="checkbox2" class="form-check-label ">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Dielivery Type
                                          </label>
                                        </div>
                                        <div class="checkbox col-md-8" style="padding-left: 115px">
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> New
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Update
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <label for="checkbox3" class="form-check-label ">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Delete
                                          </label>
                                        </div>
                                      </div> -->

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button>
                      </div>
                    </div>
@endsection
