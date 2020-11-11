    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Update All Cities Details</h3>
                    </div><!-- /.box-header -->
                    <div class="box box-primary"></div>
                    <!-- form start -->
                    
                    <form role="form" action="" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" value="<?= $all_cities->email ? $all_cities->email : '' ?>" required>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control" value="<?= $all_cities->phone ? $all_cities->phone : '' ?>" required>
                                    </div>
                                </div> 
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" id="submit2" value="Submit" />
                            <input type="button" onclick="history.go(-1);" class="btn btn-default" value="Back" />
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </section>
</div>
<div class="clearfix"></div><br><br>
