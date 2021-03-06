
<footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Powered By <a href="http://creativetech-solutions.com/" target="_blank">Creativetech-Solutions</a>.</strong>
</footer>

<?php
    if($this->router->fetch_method() === 'assessments_list' || $this->router->fetch_method() === 'details'|| $this->router->fetch_method() === 'index'){
?>

<!--Edit Ward Modal-->
<div class="modal approval-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Esic Status</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        	<input type="hidden" id="hiddenUserID">
                            <input type="hidden" id="hiddenID">
                            <label for="editStatusTextBox">Update the Pre-Assessment Esic Status</label>
                            <select id="editStatusTextBox" name="editStatusTextBox" style="width: 80%;">
                                    <option value="0">Select...</option>
                                     <?php 
                                        $esic_status_all = $this->Common_model->select('esic_status');
                                        if(isset($esic_status_all) and !empty($esic_status_all)){
                                            foreach($esic_status_all as $esicstatus){
                                                 echo '<option value="'.$esicstatus->id.'">'.$esicstatus->status.'</option>';
                                             }
                                        }   
                                    ?>    
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger mright" id="saveStatus" data-id="">Save</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">Cancel</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->

<!--Edit Ward Modal-->
<div class="modal publish-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Publish Esic</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="hiddenUserID">
                    <div class="col-md-12">
                        <p>Are You Sure To Publish This Entry?</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="yesPublish">Yes</button>
                <button type="button" class="btn btn-danger mright" data-dismiss="modal" aria-label="Close">No</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->
<!--Edit Ward Modal-->
<div class="modal unpublish-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">UnPublish Esic</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="hiddenUserID">
                    <div class="col-md-12">
                        <p>Are You Sure To UnPublish This Entry?</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="yesUnPublish">Yes</button>
                <button type="button" class="btn btn-danger mright" data-dismiss="modal" aria-label="Close">No</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->


<!--Edit Ward Modal-->
<div class="modal delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Deleted Status</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="hiddenUserID">
                    <div class="col-md-12">
                        <p>Are You Sure To Delete This Entry?</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger mright" data-dismiss="modal" aria-label="Close" id="nodelete">No</button>
                <button type="button" class="btn btn-success" id="yesDelete">Yes</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->

<?php
    }else if($this->router->fetch_method() === 'manage_status') {
?>

<style>
.modal select{
    min-height: 25px;
    max-width: 300px;
    display: block;
  }
</style>
<!--Edit Ward Modal-->
<div class="modal approval-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Esic Status</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="hiddenUserID">
                    <div class="col-md-12">
                        <p>Do You Want To Delete This Status?</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="yesApprove">Yes</button>
                <button type="button" class="btn btn-danger mright" data-dismiss="modal" aria-label="Close" id="nodelete">No</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->
<?php
    }else if($this->router->fetch_method() === 'manage_appstatus') {
?>

<style>
.modal select{
    min-height: 25px;
    max-width: 300px;
    display: block;
  }
</style>
<!--Edit Ward Modal-->
<div class="modal approval-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Esic ABR Status</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="hiddenUserID">
                    <div class="col-md-12">
                        <p>Do You Want To Delete This ABR Status?</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="yesApprove">Yes</button>
                <button type="button" class="btn btn-danger mright" data-dismiss="modal" aria-label="Close" id="nodelete">No</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->
<?php 
    }else{
?>
<style>
.modal select{
    min-height: 25px;
    max-width: 300px;
    display: block;
  }
</style>
<!--Edit Ward Modal-->
<div class="modal approval-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Trashed Model</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="hiddenUserID">
                    <div class="col-md-12">
                        <p>Do You Want To Trash This Status?</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" aria-label="Close" id="permanentDelete">Delete Permanent</button>
                <button type="button" class="btn btn-success" id="yesApprove">Yes</button>
                <button type="button" class="btn btn-danger mright" data-dismiss="modal" aria-label="Close" id="nodelete">No</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->

<!--Edit Acceleration Modal-->
<div class="modal permanent-modal" id="permanent-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Permanent Model</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="hiddenID">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" id="hiddenUserID">
                            <label for="editrndTextBox">Are You Sure you want to make it Permanent?</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="yesPermanent">Yes</button>
                <button type="button" class="btn btn-danger mright" data-dismiss="modal" aria-label="Close" id="noPermanent">No</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->

<!--Edit ABR Modal-->
<div class="modal abr-modal" id="abr-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Australian Business Registration (Commonwealth of Australia)</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="hiddenID">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" id="hiddenUserID">
                            <label for="editAbrTextBox">Please Change ABR Status: </label>
                            <select id="editAbrTextBox" name="editAbrTextBox" style="width: 80%;">
                                    <option value="0">Select...</option>
                                    <?php 
                                        $statusApp = $this->Common_model->select('esic_appstatus');
                                        if(isset($statusApp) and !empty($statusApp)){
                                            foreach($statusApp as $statusApp){
                                                 echo '<option value="'.$statusApp->id.'">'.$statusApp->status.'</option>';
                                             }
                                        }   
                                    ?>    
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="yesSaveAbr">Yes</button>
                <button type="button" class="btn btn-danger mright" data-dismiss="modal" aria-label="Close" id="noSaveAbr">No</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.End Edit Ward Modal --><!-- /.modal -->

<?php
    }
?>



    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.jasny/3.13/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<!-- jQuery 3.1.1 -->
<!--script src="https://code.jquery.com/jquery-3.1.1.js"></script-->
<!-- jQuery migrate-3.0.0 -->
<!--script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script-->
<!-- jQuery 1.12.4 -->
<!--script src="https://code.jquery.com/jquery-1.12.4.js"></script-->
<!-- jQuery 2.2.4 -->
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<!-- jQuery 2.2.3 -->
<!--script src="<?= base_url()?>assets/vendors/jQuery/jquery-2.2.3.min.js"></script-->
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url()?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>assets/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/vendors/datatables/dataTables.responsive.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>assets/vendors/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/vendors/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/js/demo.js"></script>
<script src="<?= base_url()?>assets/js/customScripting.js"></script>
<script src="<?= base_url()?>assets/js/jquery.iframe-post-form.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.jasny/3.13/js/jasny-bootstrap.min.js"></script>
<!--script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/jquery.fileupload.js"></script-->


<script>

var baseUrl = "<?= base_url() ?>";
    
</script>

<?php
if ($this->router->fetch_method() === 'assessments_list' or $this->router->fetch_method() === 'index') {
    ?>

    <!-- page script -->
    <script>
        $(function () {
            //// Need To Work ON New Way Of DataTables..
            oTable = "";
            //Initialize Select2 Elements
            var regTableSelector = $("#regList");
            var url_DT = baseUrl + "Admin/assessments_list/listing";
            var aoColumns_DT = [
                /* User ID */ {
                    "mData": "UserID",
                    "bVisible": true,
                    "bSortable": true,
                    "bSearchable": true
                },
                /* Full Name */ {
                    "mData": "FullName"
                },
                /* Email */ {
                    "mData": "Email"
                },
                /* Company */ {
                    "mData": "Company"
                },
                /*  Buisness */ {
                    "mData": "Business"
                },
                /*  ThumbsUp */ {
                    "mData": "thumbsUp"
                },
                /* Last User Login */ {
                    "mData": "Status"
                },
                /* Action Buttons */ {
                    "mData": "ViewEditActionButtons"
                },
                /* Publish Buttons */ {
                    "mData": "Publish"
                }
            ];
            var HiddenColumnID_DT = "UserID";
            var sDom_DT = '<"H"r>t<"F"<"row"<"col-lg-6 col-xs-12" i> <"col-lg-6 col-xs-12" p>>>';
            var newRowNumber =  localStorage.getItem("pageNumber") * 10;
            if(newRowNumber == undefined || newRowNumber == '' ){
                newRowNumber = 0;
            }
            commonDataTablesPage(regTableSelector, url_DT, aoColumns_DT, sDom_DT, HiddenColumnID_DT,newRowNumber);
            //oTable.fnPageChange(40);
            new $.fn.dataTable.Responsive(oTable, {
                details: true,
            });
            removeWidth(oTable);
            //Code for search box
            $("#search-input").on("keyup", function (e) {
                oTable.fnFilter($(this).val());
            });
            $(document).bind('click',"#regList_paginate .pagination li",function(evt){
                    var pageNumber = oTable.fnPagingInfo().iPage;//becaue it get 0 for page 1
                    localStorage.setItem("pageNumber", pageNumber);
          }); 

            //Some Action To Perform When Modal Is Shown.
            $(".approval-modal").on("shown.bs.modal", function (e) {
            	 var button = $(e.relatedTarget); // Button that triggered the modal
			     var ID = button.parents("tr").attr("data-id");
			     var modal = $(this);
			     modal.find("input#hiddenUserID").val(ID);
            	$.ajax({
                    url: baseUrl + "Admin/manage_status/allvalues",
                    type: "POST",
                    success: function (output) {
                        var model = $(this);
                        var data = $.parseJSON(output);
                        $('#editStatusTextBox').html('');
	                        $.each(data, function( key, value ) {
							  $('#editStatusTextBox').append('<option value="'+value.id+'">'+value.status+'</option>');
							}); 
						var StatusText = $.trim(button.parents("tr").find('.status').text());
					    var StatusID = $('#editStatusTextBox option').filter(function () { 
					              return $(this).html() == StatusText; 
					     }).val(); 	
					    $("#editStatusTextBox").val(StatusID); 
                    }
                });
  
            });

            $("#saveStatus").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var editStatusTextBox = $(this).parents(".modal-content").find("#editStatusTextBox").val();
                if (hiddenModalUserID == '') {
                    hiddenModalUserID = $(this).attr('data-id');
                }
                var postData = {id: hiddenModalUserID, value: "approve", statusValue: editStatusTextBox};
                $.ajax({
                    url: baseUrl + "Admin/assessment_list",
                    data: {
                        id: hiddenModalUserID,
                        value: "approve",
                        statusValue :editStatusTextBox
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('.approval-modal').modal('hide');
                        }
                    }
                });
            });

            $(".publish-modal").on("shown.bs.modal", function (e) {
                 var button = $(e.relatedTarget); // Button that triggered the modal
                 var ID = button.parents("tr").attr("data-id");
                 var modal = $(this);
                 modal.find("input#hiddenUserID").val(ID);
                 var publishText = $.trim(button.parents("tr").find('.publish').text());
                 $("#editStatusTextBox").val(publishText); 
                 
  
            });

             $("#yesPublish").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var editPublishTextBox = $(this).parents(".modal-content").find("#editStatusTextBox").val();
                if (hiddenModalUserID == '') {
                    hiddenModalUserID = $(this).attr('data-id');
                }
                var postData = {id: hiddenModalUserID, value: "publish", statusValue: editPublishTextBox};
                $.ajax({
                    url: baseUrl + "Admin/assessment_list",
                    data: {
                        id: hiddenModalUserID,
                        value: "publish",
                        statusValue :editPublishTextBox
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('.publish-modal').modal('hide');
                        }
                    }
                });
            });

            $(".unpublish-modal").on("shown.bs.modal", function (e) {
                 var button = $(e.relatedTarget); // Button that triggered the modal
                 var ID = button.parents("tr").attr("data-id");
                 var modal = $(this);
                 modal.find("input#hiddenUserID").val(ID);
                 var publishText = $.trim(button.parents("tr").find('.unpublish').text());
                 $("#editStatusTextBox").val(publishText); 
                 
  
            });

            $("#yesUnPublish").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var editPublishTextBox = $(this).parents(".modal-content").find("#editStatusTextBox").val();
                if (hiddenModalUserID == '') {
                    hiddenModalUserID = $(this).attr('data-id');
                }
                var postData = {id: hiddenModalUserID, value: "unpublish", statusValue: editPublishTextBox};
                $.ajax({
                    url: baseUrl + "Admin/assessment_list",
                    data: {
                        id: hiddenModalUserID,
                        value: "unpublish",
                        statusValue :editPublishTextBox
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('.unpublish-modal').modal('hide');
                        }
                    }
                });
            });

            $(".delete-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
            });

            $("#yesDelete").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                if (hiddenModalUserID == '') {
                    hiddenModalUserID = $(this).attr('data-id');
                }
                var postData = {id: hiddenModalUserID, value: "delete"};
                $.ajax({
                    url: baseUrl + "Admin/assessment_list",
                    data: {
                        id: hiddenModalUserID,
                        value: "delete"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('.delete-modal').modal('hide');
                        }
                    }
                });
            });

        });
    </script>
    <?php
}
if( $this->router->fetch_method() === 'details'){
?>
    <script type="text/javascript" src="<?=base_url()?>assets/vendors/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        $(function(){
            //Some Action To Perform When Modal Is Shown.
            $(".approval-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.attr("data-id");
                var modal = $(this);
                console.log('ID = '+ID);
                modal.find("input#hiddenUserID").val(ID);
                modal.find("#saveStatus").attr('data-id',ID);
                
            });

            $("#saveStatus").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var editStatusTextBox = $(this).parents(".modal-content").find("#editStatusTextBox").val();
                if (hiddenModalUserID == '') {
                    hiddenModalUserID = $(this).attr('data-id');
                }
                 console.log('ID = '+hiddenModalUserID);
                var postData = {id: hiddenModalUserID, value: "approve", statusValue: editStatusTextBox};
                $.ajax({
                    url: baseUrl + "Admin/assessment_list",
                    data: {
                        id: hiddenModalUserID,
                        value: "approve",
                        statusValue :editStatusTextBox
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('.approval-modal').modal('hide');
                        }
                    }
                });
            });
        tinyMCE.init({
                selector: '#short-desc-textarea',
                height: 200,
                //automatic_uploads: true,
                //images_upload_base_path: baseUrl + 'tinyimage',
                //imageupload_url:baseUrl + 'tinyimage',
                //images_upload_credentials: true,
                //relative_urls: false,
                //remove_script_host: false,
                plugins: [
                    'hr anchor',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime nonbreaking  directionality paste code'
                ],
                toolbar: 'undo redo preview| styleselect | bold italic |  outdent indent'
            });
           tinyMCE.init({
                selector: '#desc-textarea',
                height: 500,
                automatic_uploads: true,
                images_upload_base_path: baseUrl + 'tinyimage',
                imageupload_url:baseUrl + 'tinyimage',
                images_upload_credentials: true,
                relative_urls: false,
                remove_script_host: false,
                plugins: [
                    'advlist autolink lists link image imagetools jbimages charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking table contextmenu directionality paste code'
                ],
                toolbar: 'undo redo preview| styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages'
            });
            /*tinymce.init({
              selector: 'textarea',
              height: 500,
              theme: 'modern',
            images_upload_base_path: baseUrl + 'tinyimage',
            imageupload_url:baseUrl + 'tinyimage',
            images_upload_credentials: true,
              plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
              ],
              toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages',
              toolbar2: 'print preview media | forecolor backcolor emoticons',
              image_advtab: true,
              templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
              ],
              content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
              ],
              relative_urls: false
             });*/

            $("body").on("click", ".save-desc", function (e) {
                e.preventDefault();
                var userId = $(this).attr('data-user-id');
                var textArea = tinyMCE.get('desc-textarea').getContent();
                var ansDiv = $('.edit-desc');
                var saveBtn = $('#save-desc');
                var descText = $('#desc-text pre');
                var descDataText = $.trim(textArea);
                var postData = {
                    userID: userId,
                    descDataText: descDataText
                };
                saveBtn.parent().remove();
                $.ajax({
                    url: baseUrl + "Admin/savedesc",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            descText.html(data[1]);
                            ansDiv.hide();
                            $('#desc-edit').show();
                            descText.show();
                        }
                    }
                });

            });
             $("body").on("click", ".save-short-desc", function (e) {
                e.preventDefault();
                var userId = $(this).attr('data-user-id');
                var textArea = tinyMCE.get('short-desc-textarea').getContent();
                var ansDiv = $('.edit-short-desc');
                var saveBtn = $('#save-short-desc');
                var descText = $('#short-desc-text pre');
                var descDataText = $.trim(textArea);
                var postData = {
                    userID: userId,
                    descDataText: descDataText
                };
                saveBtn.parent().remove();
                $.ajax({
                    url: baseUrl + "Admin/saveshortdesc",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            descText.html(data[1]);
                            ansDiv.hide();
                            $('#short-desc-edit').show();
                            descText.show();
                        }
                    }
                });

            });

            $('#showExpDate').on("click",function(){
                var expDateEye = $(this);
                var userId = $(this).parents('#profile-box-container').attr('data-user-id');
                var currentStatus = expDateEye.attr('data-value');
                var update = 'hide';
                if(currentStatus !== 'show'){
                    update = 'show';
                }

                $.ajax({
                    url:"<?=base_url()?>Admin/showExpDate",
                    data:{expDate:update,userID:userId},
                    type:'POST',
                    success:function(output){
                        var data = output.split("::");
                        if(data[0] === 'OK'){
                            if(update=='show'){
                                expDateEye.removeClass('fa-eye-slash');
                                expDateEye.addClass('fa-eye');
                                expDateEye.attr('data-value','show');
                                //Changing Colors
                                expDateEye.removeClass('text-warning');
                                expDateEye.addClass('text-success');
                            }else{
                                expDateEye.removeClass('fa-eye');
                                expDateEye.addClass('fa-eye-slash');
                                expDateEye.attr('data-value','hide');
                                //Changing Colors
                                expDateEye.removeClass('text-success');
                                expDateEye.addClass('text-warning');

                            }

                        }
                    }
                })
            });

            $(".publish-modal").on("shown.bs.modal", function (e) {
                 var button = $(e.relatedTarget); // Button that triggered the modal
                 var ID = $('#profile-box-container').attr('data-user-id');
                 if (ID == '') {
                        ID = button.attr('data-id');
                 }
                 var modal = $(this);
                 modal.find("input#hiddenUserID").val(ID);
            });

             $("body").on("click","#yesPublish", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalUserID, value: "publish"};
                $.ajax({
                    url: baseUrl + "Admin/assessment_list",
                    data: {
                        id: hiddenModalUserID,
                        value: "publish"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('.publish-modal').modal('hide');
                            $('.publish-buttons').html('');
                            $('.publish-buttons').append('<a href="#" data-target=".unpublish-modal" data-toggle="modal" class="btn-primary" data-id="<?= $userProfile['userID'];?>">Published</a>');
                        }
                    }
                });
            });

            $(".unpublish-modal").on("shown.bs.modal", function (e) {
                 var button = $(e.relatedTarget); // Button that triggered the modal
                 var ID = $('#profile-box-container').attr('data-user-id');
                 if (ID == '') {
                        ID = button.attr('data-id');
                 }
                 var modal = $(this);
                 modal.find("input#hiddenUserID").val(ID);
            });

            $("body").on("click","#yesUnPublish", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalUserID, value: "unpublish"};
                $.ajax({
                    url: baseUrl + "Admin/assessment_list",
                    data: {
                        id: hiddenModalUserID,
                        value: "unpublish"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('.unpublish-modal').modal('hide');
                            $('.publish-buttons').html('');
                            $('.publish-buttons').append('<a href="#" data-target=".publish-modal" data-toggle="modal" class="btn btn-warning" data-id="<?= $userProfile['userID'];?>">UnPublished</a>');
                        }
                    }
                });
            });
             $(".delete-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = $('#profile-box-container').attr('data-user-id');
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
            });

            $("#yesDelete").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalUserID, value: "delete"};
                $.ajax({
                    url: baseUrl + "Admin/assessment_list",
                    data: {
                        id: hiddenModalUserID,
                        value: "delete"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('.delete-modal').modal('hide');
                             window.location = baseUrl + 'Admin/assessments_list';
                        }
                    }
                });
            });

        });
    </script>
    <?php
}
if ($this->router->fetch_method() === 'manage_sectors') {
    ?>
    <script>
        $(function () {
            oTable = "";
            var regTableSelector = $("#sectorsList");
            var url_DT = baseUrl + "Admin/manage_sectors/listing";
            var aoColumns_DT = [
                /* ID */ {
                    "mData": "ID",
                    "bVisible": true,
                    "bSortable": true,
                    "bSearchable": true
                },
                /* Sector */ {
                    "mData": "Sector"
                },
                {
                    "mData": "ABR"
                },
                {
                    "mData": "Permanent"
                },
                /* Trashed */ {
                    "mData": "Trashed"
                },
                /* Action Buttons */ {
                    "mData": "ViewEditActionButtons"
                }
            ];
            var HiddenColumnID_DT = "ID";
            var sDom_DT = '<"H"r>t<"F"<"row"<"col-lg-6 col-xs-12" i> <"col-lg-6 col-xs-12" p>>>';
            commonDataTables(regTableSelector, url_DT, aoColumns_DT, sDom_DT, HiddenColumnID_DT);

            new $.fn.dataTable.Responsive(oTable, {
                details: true
            });
            removeWidth(oTable);

            //Code for search box
            $("#search-input").on("keyup", function (e) {
                oTable.fnFilter($(this).val());
            });

            $(".approval-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var sector = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + sector + '"');
            });

            $("#editSectorModal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var Sector = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenSectorID").val(ID);
                modal.find("input#editSectorTextBox").val(Sector);
            });

            $("#abr-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var selectValue = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find("#abr-modal select option").filter(function() {
                    return this.text == selectValue; 
                }).attr('selected', true);
            });
            $("#yesSaveAbr").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var value = $(this).parents(".modal-content").find("select").val();
                var postData = {id: hiddenModalID, value: value};
                $.ajax({
                    url: baseUrl + "Admin/manage_sectors/abr",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $("#abr-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#yesApprove").on("click", function () {
                var hiddenModalSectorID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalSectorID, value: "trash"};
                $.ajax({
                    url: baseUrl + "Admin/manage_sectors/trash",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#permanentDelete").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "delete"};
                $.ajax({
                    url: baseUrl + "Admin/manage_sectors/delete",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#nodelete").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalUserID, value: "untrash"};
                $.ajax({
                    url: baseUrl + "Admin/manage_sectors/trash",
                    data: {
                        id: hiddenModalUserID,
                        value: "untrash"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('.approval-modal').modal('hide');
                        }
                    }
                });
            });
            $("#updateSectorBtn").on("click", function () {
                var id = $(this).parents(".modal-content").find("#hiddenSectorID").val();
                var sector = $(this).parents(".modal-content").find("#editSectorTextBox").val();
                var postData = {
                    id: id,
                    sector: sector
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_sectors/update",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $("#editSectorModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
           $("#permanent-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + name + '"');
            });

            $("#yesPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "Permanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_sectors/permanent",
                   data: {
                        id: hiddenModalID,
                        value: "Permanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('#permanent-modal').modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });    

            $("#noPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "noPermanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_sectors/permanent",
                    data: {
                        id: hiddenModalID,
                        value: "noPermanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('#permanent-modal').modal('hide');
                        }
                    }
                });
            });

            $("#addSectorBtn").on("click", function () {
                var sector = $(this).parents(".modal-content").find("#addSectorTextBox").val();
                var postData = {
                    sector: sector
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_sectors/new",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $(".addNewModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
        });
    </script>
    <?php
}
if ($this->router->fetch_method() === 'manage_rd') {
    ?>
    <script>
        $(function () {
            oTable = "";
            var regTableSelector = $("#RnDList");
            var url_DT = baseUrl + "Admin/manage_rd/listing";
            var aoColumns_DT = [
                /* ID */ {
                    "mData": "ID",
                    "bVisible": true,
                    "bSortable": true,
                    "bSearchable": true
                },
                /* name */ {
                    "mData": "rndname"
                },
                /* IDNumber */ {
                    "mData": "IDNumber"
                },
                /* AddressContact */ {
                    "mData": "AddressContact"
                },
                /* ANZSRC */ {
                    "mData": "ANZSRC"
                },
                {
                    "mData": "ABR"
                },
                /* Permanent */ {
                    "mData": "Permanent"
                },
                /* Trashed */ {
                    "mData": "Trashed"
                },
                /* Action Buttons */ {
                    "mData": "ViewEditActionButtons"
                }

            ];
            var HiddenColumnID_DT = "ID";
            var sDom_DT = '<"H"r>t<"F"<"row"<"col-lg-6 col-xs-12" i> <"col-lg-6 col-xs-12" p>>>';
            commonDataTables(regTableSelector, url_DT, aoColumns_DT, sDom_DT, HiddenColumnID_DT);


            new $.fn.dataTable.Responsive(oTable, {
                details: true
            });
            removeWidth(oTable);

            //Code for search box
            $("#search-input").on("keyup", function (e) {
                oTable.fnFilter($(this).val());
            });

            $(".approval-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + name + '"');
            });
            
            $("#editRndModal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var idNumber = button.parents("tr").find('td').eq(2).text();
                var addressContact = button.parents("tr").find('td').eq(3).text();
                var anzsrc = button.parents("tr").find('td').eq(4).text();
                var modal = $(this);
                modal.find("input#hiddenRndID").val(ID);
                modal.find("input#editrndTextBox").val(name);
                modal.find("input#editrndTextBoxIdNumber").val(idNumber);
                modal.find("input#editrndTextBoxAddressContact").val(addressContact);
                modal.find("input#editrndTextBoxAnzsrc").val(anzsrc);
            });


            $("#yesApprove").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "trash"};
                $.ajax({
                    url: baseUrl + "Admin/manage_rd/trash",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });     

            $("#permanentDelete").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "delete"};
                $.ajax({
                    url: baseUrl + "Admin/manage_rd/delete",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });

            $("#nodelete").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalUserID, value: "untrash"};
                $.ajax({
                    url: baseUrl + "Admin/manage_rd/trash",
                    data: {
                        id: hiddenModalUserID,
                        value: "untrash"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('.approval-modal').modal('hide');
                        }
                    }
                });
            });

            $("#permanent-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + name + '"');
            });

            $("#yesPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "Permanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_rd/permanent",
                   data: {
                        id: hiddenModalID,
                        value: "Permanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('#permanent-modal').modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });    

            $("#noPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "noPermanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_rd/permanent",
                    data: {
                        id: hiddenModalID,
                        value: "noPermanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('#permanent-modal').modal('hide');
                        }
                    }
                });
            });

            $("#updateRnDBtn").on("click", function () {
                var id = $(this).parents(".modal-content").find("#hiddenRndID").val();
                var name = $(this).parents(".modal-content").find("#editrndTextBox").val();
                var idNumber = $(this).parents(".modal-content").find("#editrndTextBoxIdNumber").val();
                var addressContact = $(this).parents(".modal-content").find("#editrndTextBoxAddressContact").val();
                var anzsrc = $(this).parents(".modal-content").find("#editrndTextBoxAnzsrc").val();
                var postData = {
                    id: id,
                    rndname: name,
                    IDNumber: idNumber,
                    AddressContact: addressContact,
                    ANZSRC: anzsrc
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_rd/update",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $("#editRndModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#abr-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var selectValue = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find("#abr-modal select option").filter(function() {
                    return this.text == selectValue; 
                }).attr('selected', true);
            });
            $("#yesSaveAbr").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var value = $(this).parents(".modal-content").find("select").val();
                var postData = {id: hiddenModalID, value: value};
                $.ajax({
                    url: baseUrl + "Admin/manage_rd/abr",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $("#abr-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
        });
    </script>

    <?php
}
if ($this->router->fetch_method() === 'manage_accelerators') {
    ?>
    <script>
        $(function () {
            oTable = "";
            var regTableSelector = $("#acceleratorsList");
            var url_DT = baseUrl + "Admin/manage_accelerators/listing";
            var aoColumns_DT = [
                /* ID */ {
                    "mData": "ID",
                    "bVisible": true,
                    "bSortable": true,
                    "bSearchable": true
                },
                /* name */ {
                    "mData": "Name"
                },
                /* website */ {
                    "mData": "Website"
                },
                /* Logo  {
                    "mData": "Logo"
                },*/
                {
                //"bSortable": false, 
                "mData": "Logo",
                //"sTitle": "Actions", 
                //"bSearchable": false, 
                "render": function ( data, type, row ) {
                    if(data!=''){
                         return '<img data-target=".logo-edit-modal" data-toggle="modal" alt="Edit" src="'+baseUrl+data+'" class="acc-logo" style="height:50px;width:50px;cursor:pointer;" />';
                    }
                    return '<span data-target=".logo-edit-modal" data-toggle="modal" class="acc-logo">Empty </span>';
                }
               // "mRender": function () { return '<img alt="Edit" src="Logo" title="Edit" style="height:18px;width:19px;cursor:pointer;" />'; }
                },
                {
                    "mData": "ABR"
                },
                /* Permanent */ {
                    "mData": "Permanent"
                },
                /* Trashed */ {
                    "mData": "Trashed"
                },
                /* Action Buttons */ {
                    "mData": "ViewEditActionButtons"
                }

            ];
            var HiddenColumnID_DT = "ID";
            var sDom_DT = '<"H"r>t<"F"<"row"<"col-lg-6 col-xs-12" i> <"col-lg-6 col-xs-12" p>>>';
            commonDataTables(regTableSelector, url_DT, aoColumns_DT, sDom_DT, HiddenColumnID_DT);


            new $.fn.dataTable.Responsive(oTable, {
                details: true
            });
            removeWidth(oTable);

            //Code for search box
            $("#search-input").on("keyup", function (e) {
                oTable.fnFilter($(this).val());
            });

            $(".approval-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + name + '"');
            });
            $(".logo-edit-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var src = button.attr('src');
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find("img#logo-show").attr('src', src);
                modal.find(".modal-body").find('p > strong').text(' "' + name + '"');
            });

            $('body').on("click",'.acc-logo', function (event) {
                var currentImage = $(this);
                var imageSrc =  currentImage.attr('src');
                console.log(imageSrc);

            });

            $("#updateLogo").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var input = $(this).parents(".modal-content").find("#update-logo-file")[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var formData = new FormData();
                        formData.append('logo', input.files[0]);
                        formData.append('id', hiddenModalID);
                        $.ajax({       
                                crossOrigin: true,
                                type: 'POST',
                                url: baseUrl + "Admin/manage_accelerators/updateLogo",
                                data: formData,
                                processData: false,
                                contentType: false
                        }).done(function (response) {
                            var data = response.split("::");
                            if (data[0] == 'OK') {
                                $(".logo-edit-modal").modal('hide');
                                oTable.fnDraw();
                            }
                       });
                    
                     };
                    reader.readAsDataURL(input.files[0]);
                }
            });

            $("#editAccelerationModal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var web = button.parents("tr").find('td').eq(2).text();
                var modal = $(this);
                modal.find("input#hiddenAccelerationID").val(ID);
                modal.find("input#editAccelerationTextBox").val(name);
                modal.find("input#editAccelerationTextBoxWeb").val(web);
            });


            $("#yesApprove").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "approve"};
                $.ajax({
                    url: baseUrl + "Admin/manage_accelerators/delete",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });

            $("#permanent-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + name + '"');
            });

            $("#yesPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "Permanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_accelerators/permanent",
                   data: {
                        id: hiddenModalID,
                        value: "Permanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('#permanent-modal').modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });    

            $("#noPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "noPermanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_accelerators/permanent",
                    data: {
                        id: hiddenModalID,
                        value: "noPermanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('#permanent-modal').modal('hide');
                        }
                    }
                });
            });

            $("#updateAccelerationBtn").on("click", function () {
                var id = $(this).parents(".modal-content").find("#hiddenAccelerationID").val();
                var name = $(this).parents(".modal-content").find("#editAccelerationTextBox").val();
                var web = $(this).parents(".modal-content").find("#editAccelerationTextBoxWeb").val();
                var postData = {
                    id: id,
                    web: web,
                    name: name
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_accelerators/update",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $("#editAccelerationModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#abr-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var selectValue = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find("#abr-modal select option").filter(function() {
                    return this.text == selectValue; 
                }).attr('selected', true);
            });
            $("#yesSaveAbr").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var value = $(this).parents(".modal-content").find("select").val();
                var postData = {id: hiddenModalID, value: value};
                $.ajax({
                    url: baseUrl + "Admin/manage_accelerators/abr",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $("#abr-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
        });
    </script>

    <?php
}
if ($this->router->fetch_method() === 'manage_universities') {
    ?>

    <script>
        $(function () {
            oTable = "";
            var regTableSelector = $("#universitiesList");
            var url_DT = baseUrl + "Admin/manage_universities/listing";
            var aoColumns_DT = [
                /* ID */ {
                    "mData": "ID",
                    "bVisible": true,
                    "bSortable": true,
                    "bSearchable": true
                },
                /* University */ {
                    "mData": "University"
                },
                {
                    "mData": "ABR"
                },
                /* Permanent */ {
                    "mData": "Permanent"
                },
                /* Trashed */ {
                    "mData": "Trashed"
                },
                /* Action Buttons */ {
                    "mData": "ViewEditActionButtons"
                }
            ];
            var HiddenColumnID_DT = "ID";
            var sDom_DT = '<"H"r>t<"F"<"row"<"col-lg-6 col-xs-12" i> <"col-lg-6 col-xs-12" p>>>';
            commonDataTables(regTableSelector, url_DT, aoColumns_DT, sDom_DT, HiddenColumnID_DT);


            new $.fn.dataTable.Responsive(oTable, {
                details: true
            });
            removeWidth(oTable);

            //Code for search box
            $("#search-input").on("keyup", function (e) {
                oTable.fnFilter($(this).val());
            });

            $(".approval-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var University = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + University + '"');
            });

            $("#editUniversitiesModal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var University = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenID").val(ID);
                modal.find("input#editUniversitiesTextBox").val(University);
            });

            $("#yesApprove").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "trash"};
                $.ajax({
                    url: baseUrl + "Admin/manage_universities/trash",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });

            $("#permanentDelete").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "delete"};
                $.ajax({
                    url: baseUrl + "Admin/manage_universities/delete",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });

            $("#nodelete").on("click", function () {
                var hiddenModalUserID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalUserID, value: "untrash"};
                $.ajax({
                    url: baseUrl + "Admin/manage_universities/trash",
                    data: {
                        id: hiddenModalUserID,
                        value: "untrash"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('.approval-modal').modal('hide');
                        }
                    }
                });
            });

            $("#updateUniversitiesBtn").on("click", function () {
                var id = $(this).parents(".modal-content").find("#hiddenID").val();
                var University = $(this).parents(".modal-content").find("#editUniversitiesTextBox").val();
                var postData = {
                    id: id,
                    University: University
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_universities/update",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $("#editUniversitiesModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#permanent-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + name + '"');
            });

            $("#yesPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "Permanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_universities/permanent",
                   data: {
                        id: hiddenModalID,
                        value: "Permanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('#permanent-modal').modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });    

            $("#noPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "noPermanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_universities/permanent",
                    data: {
                        id: hiddenModalID,
                        value: "noPermanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('#permanent-modal').modal('hide');
                        }
                    }
                });
            });
            $("#addUniversityBtn").on("click", function () {
                var University = $(this).parents(".modal-content").find("#addUniversityTextBox").val();
                var postData = {
                    University: University
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_universities/new",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $(".addNewModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#abr-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var selectValue = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find("#abr-modal select option").filter(function() {
                    return this.text == selectValue; 
                }).attr('selected', true);
            });
            $("#yesSaveAbr").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var value = $(this).parents(".modal-content").find("select").val();
                var postData = {id: hiddenModalID, value: value};
                $.ajax({
                    url: baseUrl + "Admin/manage_universities/abr",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $("#abr-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
        });
    </script>

    <?php
}
if ($this->router->fetch_method() === 'manage_acc_commercials') {
    ?>
    <script>
        $(function () {
            oTable = "";
            var regTableSelector = $("#acceleratorsList");
            var url_DT = baseUrl + "Admin/manage_acc_commercials/listing";
            var aoColumns_DT = [
                /* ID */ {
                    "mData": "ID",
                    "bVisible": true,
                    "bSortable": true,
                    "bSearchable": true
                },
                /* Member */ {
                    "mData": "Member"
                },
                /* Web_Address */ {
                    "mData": "Web_Address"
                },
                {
                    "mData": "Project_Title"
                },
                /*
                 {
                 "mData" : "State_Territory"
                 },
                 {
                 "mData" : "Project_Location"
                 },
                 {
                 "mData" : "Project_Title"
                 },
                 {
                 "mData" : "Project_Summary"
                 },
                 {
                 "mData" : "Project_Success"
                 },
                 {
                 "mData" : "Market"
                 },
                 {
                 "mData" : "Technology"
                 },
                 {
                 "mData" : "Type"
                 },
                 */
                 {
                    "mData": "ABR"
                 },
                 /* Permanent */ {
                    "mData": "Permanent"
                },
                {
                    "mData": "Trashed"
                },
                {
                    "mData": "ViewEditActionButtons"
                }
            ];
            var HiddenColumnID_DT = "ID";
            var sDom_DT = '<"H"r>t<"F"<"row"<"col-lg-6 col-xs-12" i> <"col-lg-6 col-xs-12" p>>>';
            commonDataTables(regTableSelector, url_DT, aoColumns_DT, sDom_DT, HiddenColumnID_DT);


            new $.fn.dataTable.Responsive(oTable, {
                details: true
            });
            removeWidth(oTable);

            //Code for search box
            $("#search-input").on("keyup", function (e) {
                oTable.fnFilter($(this).val());
            });

            $(".approval-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var Member = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + Member + '"');
            });

            $("#editAccelerationModal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var Member = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenSectorID").val(ID);
                modal.find("input#editSectorTextBox").val(Member);
            });


            $("#yesApprove").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "approve"};
                $.ajax({
                    url: baseUrl + "Admin/manage_acc_commercials/delete",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#permanent-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var name = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + name + '"');
            });

            $("#yesPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "Permanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_acc_commercials/permanent",
                   data: {
                        id: hiddenModalID,
                        value: "Permanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $('#permanent-modal').modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });    

            $("#noPermanent").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "noPermanent"};
                $.ajax({
                    url: baseUrl + "Admin/manage_acc_commercials/permanent",
                    data: {
                        id: hiddenModalID,
                        value: "noPermanent"
                    },
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            oTable.fnDraw();
                            $('#permanent-modal').modal('hide');
                        }
                    }
                });
            });

            $("#updateAccelerationBtn").on("click", function () {
                var id = $(this).parents(".modal-content").find("#hiddenSectorID").val();
                var sector = $(this).parents(".modal-content").find("#editAccelerationTextBox").val();
                var postData = {
                    id: id,
                    sector: sector
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_acc_commercials/update",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $("#editAccelerationModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
            $("#abr-modal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var selectValue = button.parents("tr").find('td').eq(1).text();
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find("#abr-modal select option").filter(function() {
                    return this.text == selectValue; 
                }).attr('selected', true);
            });
            $("#yesSaveAbr").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var value = $(this).parents(".modal-content").find("select").val();
                var postData = {id: hiddenModalID, value: value};
                $.ajax({
                    url: baseUrl + "Admin/manage_acc_commercials/abr",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $("#abr-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
        });
    </script>
<?php }
if ($this->router->fetch_method() === 'details') {
    ?>
    <script>
        $(function () {
            $("body").on("click", ".save-answer", function (e) {

                e.preventDefault();
                var id = $(this).attr('data-id');
                var Answervalue = $('.' + id + ' select.answer-solution').val();
                var SpAnswervalue = $('.' + id + ' .edit-category.sp-question select').val();
                var tableName = $('.' + id + ' .edit-category.sp-question').attr('data-tablename');
                var tableUpdateID = $('.' + id + ' .edit-category.sp-question').attr('data-tableUpdateID');
                var ansDiv = $('.' + id + ' .edit-question');
                var dataQuestionId = $(this).attr('data-question-id');
                var userID = $('#profile-box-container').attr('data-user-id');
                var answerDiv = $('.' + id + ' .answer-solution');
                var scoreDiv = $('.' + id + ' .question-points');
                var barDiv = $('.progress .question-bar span');
                var oldScore = scoreDiv.attr('data-score');

                var postData = {
                    id: id,
                    userID: userID,
                    dataQuestionId: dataQuestionId,
                    Answervalue: Answervalue,
                    SpAnswervalue: SpAnswervalue,
                    tableName: tableName,
                    tableUpdateID:tableUpdateID,
                    oldScore: oldScore
                };
                $.ajax({
                    url: baseUrl + "Admin/saveanswer",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            ansDiv.hide();
                            answerDiv.text(Answervalue);
                            scoreDiv.text(data[1]);
                            barDiv.text(data[2]);
                            barDiv.parent().css('width', data[2] + '%');
                        }
                    }
                });
            });

            $(".question-edit").on("click", function (event) {
                event.preventDefault();
                var id = $(this).attr('data-id');
                var select = $('.' + id + ' select.answer-solution');
                var ansDiv = $('.' + id + ' .edit-question');
                var dataQuestionId = $(this).attr('data-question-id');
                var saveBtn = $('.' + id + ' .save-answer');


                var postData = {
                    id: id,
                    dataQuestionId: dataQuestionId
                };
                saveBtn.parent().remove();
                $.ajax({
                    url: baseUrl + "Admin/getanswers",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = $.parseJSON(output);
                        select.html('');
                        $.each(data, function (index, value) {
                            select.append('<option value="' + value.solution + '">' + value.solution + '</option>');
                        });
                        select.parent().append('<div class="question-action-buttons"><button class="save-answer" data-question-id="' + dataQuestionId + '" data-id="' + id + '">Save</button></div>');
                        ansDiv.show();
                    }
                });
            });
            $("#desc-edit").on("click", function (event) {
                event.preventDefault();
                var userId = $(this).attr('data-user-id');
                var textArea = $('#desc-textarea');
                var ansDiv = $('.edit-desc');
                var saveBtn = $('#save-desc');
                var descText = $('#desc-text pre');
                ansDiv.show();
                descText.hide();
                var descDataText = descText.text();
                descText.text('');
                textArea.val($.trim(descDataText));
                ansDiv.children('.form-group').append('<div class="question-action-buttons"><button id="save-desc" data-user-id="'+userId+'" class="save-desc">Save</button></div>');
                $(this).hide();
                
              
            });
            $("#short-desc-edit").on("click", function (event) {
                event.preventDefault();
                var userId = $(this).attr('data-user-id');
                var textArea = $('#short-desc-textarea');
                var ansDiv = $('.edit-short-desc');
                var saveBtn = $('#save-short-desc');
                var descText = $('#short-desc-text pre');
                ansDiv.show();
                descText.hide();
                var descDataText = descText.text();
                descText.text('');
                textArea.val($.trim(descDataText));
                ansDiv.children('.form-group').append('<div class="question-action-buttons"><button id="save-short-desc" data-user-id="'+userId+'" class="save-short-desc">Save</button></div>');
                $(this).hide();
                
              
            });
            $("body").on("click", ".date-edit", function (e) {
                e.preventDefault();
                var userId = $('#profile-box-container').attr('data-user-id');
                var dateType = $(this).attr('data-date-type');
                var dateValue = $(this).attr('data-date-value');
                // DateEditModal
                
              
            });

            $('.DateEditModal').on('shown.bs.modal',function(e){
            	var relatedPencil = e.relatedTarget;
            	var userId = $('#profile-box-container').attr('data-user-id');
                var dateType = $(relatedPencil).attr('data-date-type');
                var dateTitle = $(relatedPencil).attr('data-date-title');
                var dateValue = $(relatedPencil).attr('data-date-value');
            	$(this).find('#myModalLabel').text(dateTitle);
            	$(this).find('#dateType').val(dateType);
            	$(this).find('#edit_date').val(dateValue);
            	//$('#edit_date').datepicker("setDate", new Date(dateValue));

            });
            $("body").on("click", "#saveDate", function (e) {
                e.preventDefault();
                var EditedDate = $(this).parents('.modal-content').find('#edit_date').val();
                var dateType = $(this).parents('.modal-content').find('#dateType').val();
                var userId = $('#profile-box-container').attr('data-user-id');
                var postData = {
                    userID: userId,
                    dateType: dateType,
                    EditedDate: EditedDate
                };
                $.ajax({
                    url: baseUrl + "Admin/savedate",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
	                         location.reload();
	                    }
                    }
                });
              
            }); 
            $("body").on("click", "#full-edit", function (e) {
                e.preventDefault();
               $('.profile-username').hide();
               $('.editable.fullname').show();
               $('.editable.fullname input').focus();
              
            });
            $( ".fullname" ).focusout(function() {
			   var userId = $('#profile-box-container').attr('data-user-id');
			   $('.profile-username').show();
               $('.editable.fullname').hide();
               var NewFullName = $('.editable.fullname input').val();
                var postData = {
                    userID: userId,
                    fullName: NewFullName
                };
                $.ajax({
                    url: baseUrl + "Admin/updatename",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
	                       $('.profile-username b').text(NewFullName);
	                    }
                    }
                });
			});
			$("body").on("click", "#web-edit", function (e) {
                e.preventDefault();
               $('.website-text').hide();
               $('.editable.website').show()
               $('#web-edit').hide();
               $('.editable.website input').focus();
              
            });
            $( "#web-input" ).focusout(function() {
			   var userId = $('#profile-box-container').attr('data-user-id');
			   $('.website-text').show();
			   $('#web-edit').show();
               $('.editable.website').hide();
               var website = $('.editable.website input').val();
                var postData = {
                    userID: userId,
                    website: website
                };
                $.ajax({
                    url: baseUrl + "Admin/updatewebsite",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
	                       $('.website-text').text(website);
	                       $('.website-text').attr('href','http://'+website);
	                    }
                    }
                });
			});          
			$("body").on("click", "#company-edit", function (e) {
                e.preventDefault();
               $('.company-text').hide();
               $('.editable.company').show()
               $('.editable.company input').focus();
              
            });
            $("#company-input").focusout(function() {
			   var userId = $('#profile-box-container').attr('data-user-id');
			   $('.company-text').show();
               $('.editable.company').hide();
               var company = $('.editable.company input').val();
                var postData = {
                    userID: userId,
                    company: company
                };
                $.ajax({
                    url: baseUrl + "Admin/updatecompany",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
	                       $('.company-text p').text(company);
	                    }
                    }
                });
			});
			$("body").on("click", "#email-edit", function (e) {
                e.preventDefault();
               $('.email-text').hide();
               $('.editable.email').show()
               $('.editable.email input').focus();
              
            });
			$("#email-input").focusout(function() {
			   var userId = $('#profile-box-container').attr('data-user-id');
			   $('.email-text').show();
               $('.editable.email').hide();
               var email = $('.editable.email input').val();
                var postData = {
                    userID: userId,
                    email: email
                };
                $.ajax({
                    url: baseUrl + "Admin/updateemail",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
	                       $('.email-text p').text(email);
	                    }
                    }
                });
			});
            $("body").on("click", "#acn-edit", function (e) {
                e.preventDefault();
               $('.acn-text').hide();
               $('.editable.acn').show()
               $('.editable.acn input').focus();
              
            });
            $("#acn-input").focusout(function() {
               var userId = $('#profile-box-container').attr('data-user-id');
               $('.acn-text').show();
               $('.editable.acn').hide();
               var acn = $('.editable.acn input').val();
                var postData = {
                    userID: userId,
                    acn: acn
                };
                $.ajax({
                    url: baseUrl + "Admin/updateacn",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
                           $('.acn-text p').text(acn);
                        }
                    }
                });
            });               
            $("body").on("click", "#ipAddress-edit", function (e) {
                e.preventDefault();
               $('.ipAddress-text').hide();
               $('.editable.ipAddress').show()
               $('.editable.ipAddress input').focus();
               var oldIpAddress = $(this).parents('.ipAddress-text').find('.text-muted').text();
                $('.editable.ipAddress input').val(oldIpAddress);
              
            });
            $("#ipAddress-input").focusout(function() {
               var userId = $('#profile-box-container').attr('data-user-id');
               $('.ipAddress-text').show();
               $('.editable.ipAddress').hide();
               var ipAddress = $('.editable.ipAddress input').val();
                var postData = {
                    userID: userId,
                    ipAddress: ipAddress
                };
                $.ajax({
                    url: baseUrl + "Admin/updateip",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
                           $('.ipAddress-text p').text(ipAddress);
                        }
                    }
                });
            });
            $("body").on("click", "#address-edit", function (e) {
                e.preventDefault();
               $('.address-text').hide();
               $('.editable.address').show()
                var street = $('.address-text span.street').text();
                var town = $('.address-text span.town').text();
                var state =$('.address-text span.state').text();
                $('.editable.address #street-input').val(street);
                $('.editable.address #town-input').val(town);
                $('.editable.address #state-input').val(state);
              
            });
            $("body").on("click", "#address-save", function (e) {
               var userId = $('#profile-box-container').attr('data-user-id');
               $('.address-text').show();
               $('.editable.address').hide();
                var street = $('.editable.address #street-input').val();
                var town = $('.editable.address #town-input').val();
                var state = $('.editable.address #state-input').val();
                var postData = {
                    userID: userId,
                    address: street,
                    town: town,
                    state: state
                };
                $.ajax({
                    url: baseUrl + "Admin/updateAddress",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
                           $('.address-text .street').text(street);
                           $('.address-text .town').text(town);
                           $('.address-text .state').text(state);
                        }
                    }
                });
            });                        
			$("body").on("click", "#bsName-edit", function (e) {
                e.preventDefault();
               $('.bsName-text').hide();
               $('.editable.bsName').show()
               $('.editable.bsName input').focus();
              
            });
			$("#bsName-input").focusout(function() {
			   var userId = $('#profile-box-container').attr('data-user-id');
			   $('.bsName-text').show();
               $('.editable.bsName').hide();
               var bsName = $('.editable.bsName input').val();
                var postData = {
                    userID: userId,
                    bsName: bsName
                };
                $.ajax({
                    url: baseUrl + "Admin/updatebsName",
                    data: postData,
                    type: "POST",
                    success: function(output) {
                       var data = output.split("::");
                       if(data[0] === "OK") {
	                       $('.bsName-text p').text(bsName);
	                    }
                    }
                });
			});

			$("body").on("click", ".save-sector", function (e) {
                e.preventDefault();
                var userId 	= $('#profile-box-container').attr('data-user-id');
                var select  = $('.edit-sector select');
                var ansDiv  = $('.edit-sector');
                var answer  = $('.edit-sector select').val();
                var editText= $('.sector-text p');
                
                var postData = {
                    userID: userId,
                    answer: answer
                };
                $.ajax({
                    url: baseUrl + "Admin/savesector",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            ansDiv.slideUp('slow');
                            var newanswer  = $(".edit-sector select option:selected").text();
                            editText.text(newanswer);

                        }
                    }
                });
            });
            $("#resetThumbsUp").on("click", function () {
                var userId  = $('#profile-box-container').attr('data-user-id');
                var postData = {
                    userID: userId
                };
                $.ajax({
                    url: baseUrl + "Admin/resetThumbsUp",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                       var data = output.split("::");
                        if(data[0] === 'OK'){
                          $('.thumbsUp-container').find('p').text(0);                              
                        }
                    }
                });
            });
            $("#sector-edit").on("click", function (event) {
                event.preventDefault();
                var saveBtn = $('.save-sector');
                var userId  = $('#profile-box-container').attr('data-user-id');
                var select  = $('.edit-sector select');
                var ansDiv  = $('.edit-sector');
                var postData = {
                    userID: userId
                };
                saveBtn.parent().remove();
                $.ajax({
                    url: baseUrl + "Admin/getsectors",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = $.parseJSON(output);
                        select.html('');
                        $.each(data, function (index, value) {
                            select.append('<option value="' + value.id + '">' + value.sector + '</option>');
                        });
                        select.parent().append('<div class="sector-action-buttons"><button class="save-sector">Save</button></div>');
                        ansDiv.slideDown('slow');
                    }
                });
            });                                        
        });
		
		$(function() {
                
		   $('#edit-logo').change(function(event) {
            var input = $(this)[0];
            var userId  = $('#profile-box-container').attr('data-user-id');
            $('#loading-image-logo').show();
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var formData = new FormData();
                        formData.append('logo', input.files[0]);
                        formData.append('userID', userId);
                        $.ajax({       
                                crossOrigin: true,
                                type: 'POST',
                                url: baseUrl + "Admin/savelogo",
                                data: formData,
                                processData: false,
                                contentType: false
                        }).done(function (response) {
                            var data = response.split("::");
                            if(data[0] === 'OK'){
                                $('#loading-image-logo').hide();
                                $('#User-Logo').attr('src', e.target.result);
                            }else if(data[0] === 'FAIL'){
                                $('#loading-image-logo').hide();
                            }
                       });
                    
                     };
                    reader.readAsDataURL(input.files[0]);
                }else{
                    $('#loading-image').hide();
                }
            });
           $('#edit-banner').change(function(event) {
            var input = $(this)[0];
            var userId  = $('#profile-box-container').attr('data-user-id');
            $('#loading-image-banner').show();
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var formData = new FormData();
                        formData.append('bannerImage', input.files[0]);
                        formData.append('userID', userId);
                        $.ajax({       
                                crossOrigin: true,
                                type: 'POST',
                                url: baseUrl + "Admin/saveBannerImage",
                                data: formData,
                                processData: false,
                                contentType: false
                        }).done(function (response) {
                            var data = response.split("::");
                            if(data[0] === 'OK'){
                                $('#loading-image-banner').hide();
                                $('#User-banner').attr('src', e.target.result);
                            }else if(data[0] === 'FAIL'){
                                $('#loading-image-banner').hide();
                            }
                       });
                    
                     }
                    reader.readAsDataURL(input.files[0]);
                }else{
                    $('#loading-image').hide();
                }
            });
           $('#edit-product').change(function(event) {
            var input = $(this)[0];
            var userId  = $('#profile-box-container').attr('data-user-id');
            $('#loading-image-product').show();
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var formData = new FormData();
                        formData.append('productImage', input.files[0]);
                        formData.append('userID', userId);
                        $.ajax({       
                                crossOrigin: true,
                                type: 'POST',
                                url: baseUrl + "Admin/saveProductImage",
                                data: formData,
                                processData: false,
                                contentType: false
                        }).done(function (response) {
                            var data = response.split("::");
                            if(data[0] === 'OK'){
                                $('#loading-image-product').hide();
                                $('#User-product').attr('src', e.target.result);
                            }else if(data[0] === 'FAIL'){
                                $('#loading-image-product').hide();
                            }
                       });
                    
                     }
                    reader.readAsDataURL(input.files[0]);
                }else{
                    $('#loading-image').hide();
                }
            });

		    $("#edit_date").daterangepicker({
		    	singleDatePicker: true,
		        locale: {
		            format: 'DD-MM-YYYY',
		        }
		    });
		});


    </script>
<?php }
	if ($this->router->fetch_method() === 'manage_status') {
?>
    <script>
        $(function () {
            oTable = "";
            var regTableSelector = $("#statusList");
            var url_DT = baseUrl + "Admin/manage_status/listing";
            var aoColumns_DT = [
                /* ID */ {
                    "mData": "ID",
                    "bVisible": true,
                    "bSortable": true,
                    "bSearchable": true
                },
                /* Status */ {
                    "mData": "Status"
                },
                /* Action Buttons */ {
                    "mData": "ViewEditActionButtons"
                }
            ];
            var HiddenColumnID_DT = "ID";
            var sDom_DT = '<"H"r>t<"F"<"row"<"col-lg-6 col-xs-12" i> <"col-lg-6 col-xs-12" p>>>';
            commonDataTables(regTableSelector, url_DT, aoColumns_DT, sDom_DT, HiddenColumnID_DT);


            new $.fn.dataTable.Responsive(oTable, {
                details: true
            });
            removeWidth(oTable);

            //Code for search box
            $("#search-input").on("keyup", function (e) {
                oTable.fnFilter($(this).val());
            });

            $(".approval-modal").on("shown.bs.modal", function (e) {

                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var Status = $.trim(button.parents("tr").find('td').eq(1).text());
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + Status + '"');
            });

            $("#editStatusModal").on("shown.bs.modal", function (e) {
				var button = $(e.relatedTarget); // Button that triggered the modal
				var ID = button.parents("tr").attr("data-id");
				var Status = $.trim(button.parents("tr").find('td').eq(1).text());
				var modal = $(this);
				modal.find("input#hiddenID").val(ID);
				modal.find("#editStatusBox").val(Status);

            });

            $("#yesApprove").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "delete"};
                $.ajax({
                    url: baseUrl + "Admin/manage_status/delete",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });

            $("#updateStatusBtn").on("click", function () {
                var id = $(this).parents(".modal-content").find("#hiddenID").val();
                var Status = $.trim($(this).parents(".modal-content").find("#editStatusBox").val());
                var postData = {
                    id: id,
                    status: Status
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_status/update",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $("#editStatusModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
          
            $("#addStatusBtn").on("click", function () {
                var Status = $(this).parents(".modal-content").find("#addStatusTextBox").val();
                var postData = {
                    status: Status
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_status/new",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $(".addNewModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
        });
    </script>
<?php }
    if ($this->router->fetch_method() === 'manage_appstatus') {
?>
    <script>
        $(function () {
            oTable = "";
            var regTableSelector = $("#statusList");
            var url_DT = baseUrl + "Admin/manage_appstatus/listing";
            var aoColumns_DT = [
                /* ID */ {
                    "mData": "ID",
                    "bVisible": true,
                    "bSortable": true,
                    "bSearchable": true
                },
                /* Status */ {
                    "mData": "Status"
                },
                /* Action Buttons */ {
                    "mData": "ViewEditActionButtons"
                }
            ];
            var HiddenColumnID_DT = "ID";
            var sDom_DT = '<"H"r>t<"F"<"row"<"col-lg-6 col-xs-12" i> <"col-lg-6 col-xs-12" p>>>';
            commonDataTables(regTableSelector, url_DT, aoColumns_DT, sDom_DT, HiddenColumnID_DT);


            new $.fn.dataTable.Responsive(oTable, {
                details: true
            });
            removeWidth(oTable);

            //Code for search box
            $("#search-input").on("keyup", function (e) {
                oTable.fnFilter($(this).val());
            });

            $(".approval-modal").on("shown.bs.modal", function (e) {

                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var Status = $.trim(button.parents("tr").find('td').eq(1).text());
                var modal = $(this);
                modal.find("input#hiddenUserID").val(ID);
                modal.find(".modal-body").find('p > strong').text(' "' + Status + '"');
            });

            $("#editStatusModal").on("shown.bs.modal", function (e) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var ID = button.parents("tr").attr("data-id");
                var Status = $.trim(button.parents("tr").find('td').eq(1).text());
                var modal = $(this);
                modal.find("input#hiddenID").val(ID);
                modal.find("#editStatusBox").val(Status);

            });

            $("#yesApprove").on("click", function () {
                var hiddenModalID = $(this).parents(".modal-content").find("#hiddenUserID").val();
                var postData = {id: hiddenModalID, value: "delete"};
                $.ajax({
                    url: baseUrl + "Admin/manage_appstatus/delete",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] == 'OK') {
                            $(".approval-modal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });

            $("#updateStatusBtn").on("click", function () {
                var id = $(this).parents(".modal-content").find("#hiddenID").val();
                var Status = $.trim($(this).parents(".modal-content").find("#editStatusBox").val());
                var postData = {
                    id: id,
                    status: Status
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_appstatus/update",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $("#editStatusModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
          
            $("#addStatusBtn").on("click", function () {
                var Status = $(this).parents(".modal-content").find("#addStatusTextBox").val();
                var postData = {
                    status: Status
                };
                $.ajax({
                    url: baseUrl + "Admin/manage_appstatus/new",
                    data: postData,
                    type: "POST",
                    success: function (output) {
                        var data = output.split("::");
                        if (data[0] === "OK") {
                            $(".addNewModal").modal('hide');
                            oTable.fnDraw();
                        }
                    }
                });
            });
        });
    </script>

    <?php
}
?>
</body>
</html>