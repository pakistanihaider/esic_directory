<!doctype html>

<html lang="en">

<head>
    <title>Form to Wizard with jQuery Validation plugin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .wrap { max-width: 980px; margin: 10px auto 0; }
        #steps { margin: 80px 0 0 0 }
        .commands { overflow: hidden; margin-top: 30px; }
        .prev {float:left}
        .next, .submit {float:right}
        .error { color: #b33; }
        #progress { position: relative; height: 5px; background-color: #eee; margin-bottom: 20px; }
        #progress-complete { border: 0; position: absolute; height: 5px; min-width: 10px; background-color: #337ab7; transition: width .2s ease-in-out; }

    </style>

    <style type="text/css">
        fieldset{
            background: rgba(232, 234, 246, 0.87) none repeat scroll 0 0;
            padding: 10px;
        }
        fieldset > div {
            background: rgba(66, 66, 66, 0.1) none repeat scroll 0 0;
            border-radius: 5px;
            margin: 5px;
            padding: 5px;
        }
        legend{
            background-color: #424242;
            color: #fff;
            text-align: center;
            height:60px;
            padding: 15px 0;
        }
        form{
            /*background-color: #424242;*/
        }
        #mainFormDiv{
            /*background-color: #424242;*/
            box-shadow: 0 0 9px rgba(0, 0, 0, 0.3);
            background-image: url("uploads/8/4/3/6/84367404/background-images/561993498.jpg") !important;
        }
        #SaveAccount{
            margin-top:5px;
            margin-bottom:5px;
        }
        .selectorDiv{
            background: rgba(66, 66, 66, 0.1) none repeat scroll 0 0;
            margin-top: 8px;
            padding: 10px;
            display: none;
        }
        .select2Style{
            float: left;
        }
        .addNewToSelector{
            float: left;
            display: inline-block;
        }
        a.addBtn{
            background: #fff none repeat scroll 0 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: inline-block;
            font-size: 14px;
            padding: 3px 7px;
            cursor: pointer;
        }
    </style>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <link href="<?=base_url()?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet" />

    <script type="text/javascript">
        $(function() {
            var $signupForm = $( '#SignupForm' );
            $signupForm.validate({
                errorElement: 'em',
                submitHandler: function (form) {
                    $.ajax({
                            crossOrigin: true,
                            type: $(form).attr('method'),
                            url: $(form).attr('action'),
                            data: $(form).serialize()
                        })
                        .done(function (response) {
                            var data = response.split("::");
                            if(data[0] === "OK"){
                                //Run another Ajax To Get Another Form.
                                $.ajax({
                                    crossOrigin: true,
                                    url:"<?=base_url()?>Reg/step2",
                                    type:'GET',
                                    data:{id:data[2]},
                                    dataType:"json",
                                    success:function(output){
//                                        var inData = output.split("::");
                                        if(output[0] === "OK"){
                                            $signupForm.remove();
                                            $("#mainFormDiv").html(output[1]);
                                        }
                                    }
                                });
                            }else{

                            }

                        });
                    return false; // required to block normal submit since you used ajax
                }
            });
        });
    </script>

</head>

<body>
<div class="row wrap">
    <div class="col-lg-12" id="mainFormDiv">

        <form id="SignupForm" action="<?php echo base_url('Reg/submit')?>" method="post">
            <fieldset>
                <legend>Early Stage Companies Pre-assessment</legend>
                <p>
                    This pre-assessment will help you determine if you are likely to qualify as an Eligible Early Stage
                    Innovation Company, i.e. a company that meets both the Early Stage Test and either the 100 point
                    Innovation Test or the Principles-based Innovation Test. Failing these tests, the company may
                    request a taxation ruling from the Australian Tax Office.
                </p>

                <div class="form-group">
                    <label for="Name">Name</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input id="NameFirst" name="firstName" type="text" placeholder="First" class="form-control"
                                  required />
                        </div>
                        <div class="col-lg-6">
                            <input id="NameLast" name="lastName" type="text" placeholder="Last" class="form-control"
                                  required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input id="Email" name="email" type="email" class="form-control" placeholder="e-g: jhon@example.com" required />
                </div>
                <div class="form-group">
                    <label for="Company">Company Name</label>
                    <input id="Company" name="company" type="text" class="form-control" placeholder="Company" />
                </div>
                <div class="form-group">
                    <label for="Business">Business Name (if different)</label>
                    <input id="Business" name="business" type="text" class="form-control" placeholder="Business Name" />
                </div>
                <div class="form-group">
                    <label for="shortDescription">Short Description of business</label>
                    <textarea id="shortDescription" class="form-control" name="shortDescription"></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Early Stage Limb</legend>
                <div>
                    <strong>Did your business have less than or equal to $1 million in expenses in the previous income year?</strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="1mExpense">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="1mExpense">No</label>
                    </div>
                </div>

                <div>
                    <strong>Did your business have less than or equal to $200,000 in assessable income in the previous income year? (Excluding Accelerating Commercialisation Grant)</strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="assessableIncomeYear">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="assessableIncomeYear">No</label>
                    </div>
                </div>

                <div>
                    <strong>Is your business listed on any stock exchanges?</strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="listedInSExchange">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="listedInSExchange">No</label>
                    </div>
                </div>

                <div>
                    <strong>When was your company incorporated in Australia?</strong>
                    <div class="radio">
                        <label><input type="radio" value="Within the past three years" name="incorporatedAus">Within the past three years</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" id="3and6" value="Between six and three years ago" name="incorporatedAus">Between six and three years ago</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="Greater than six years ago" name="incorporatedAus">Greater than six years ago</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="Not incorporated in Australia" name="incorporatedAus">Not incorporated in Australia</label>
                    </div>
                </div>

                <div id="whollyOwned">
                    <strong>Have you and your wholly owned subsidiaries incurred less than $1 million in expenses total across the last 3 income years?</strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="ownedSubsidiaries">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="ownedSubsidiaries">No</label>
                    </div>
                </div>
            </fieldset>

            <fieldset class="form-horizontal" role="form">
                <legend>Innovation Limb</legend>
                <span style="text-decoration: underline">Principles-Based Test</span>

                <div>
                    <strong>Is your company developing a new or significantly improved type of innovation? (See http://www.oecd.org/sti/oslomanual for examples of innovation)
                    </strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="improvedInnovation">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="improvedInnovation">No</label>
                    </div>
                </div>

                <div>
                    <strong>Does your company have the potential for high growth?</strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="potentialHighGrowth">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="potentialHighGrowth">No</label>
                    </div>
                </div>

                <div>
                    <strong>Is your company scalable? (Can you reduce or minimize cost increase as your revenues grow)
                    </strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="companyScalable">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="companyScalable">No</label>
                    </div>
                </div>

                <div>
                    <strong>Will you be able to address a national, international or global market?</strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="globalMarket">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="globalMarket">No</label>
                    </div>
                </div>

                <div>
                    <strong>Is there potential for a clear competitive advantage over other companies? </strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="competitiveAdvantage">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="competitiveAdvantage">No</label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-horizontal" role="form">
                <legend>Innovation Limb</legend>
                <p><span style="text-decoration: underline">Objective Test (100 Points Required)</span><br />
                    See the <span style="text-decoration: underline">FAQ</span> for an explanation of how points are awarded.
                </p>

                <div>
                    <strong>Which of the following describes your R&D expenses as a proportion of total expenses?
                    </strong>
                    <div class="radio">
                        <label><input type="radio" value="Greater than or equal to 50%" name="rdExpenses">Greater than or equal to 50%</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="Between 15% and 50%" name="rdExpenses">Between 15% and 50%</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="Less than 15%" name="rdExpenses">Less than 15%</label>
                    </div>
                </div>

                <div>
                    <strong>Have you received an Accelerating Commercialisation Grant under the Accelerating Commercialisation element of the Commonwealth's Entrepreneur's programme?</strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="EntrepreneurProgramme">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="EntrepreneurProgramme">No</label>
                    </div>
                    <!--                    Div For Selector-->
                    <div class="selectorDiv" id="EntrepreneurProgramme">
                        <label for="selectAcceleration">Select Acceleration Commercial</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <select class="select2Style" id="selectAcceleration" style="width:90%">
                                    <option value="0">Select...</option>
                                    <?php
                                    if(isset($accelerationCommercials) and !empty($accelerationCommercials)){
                                        foreach($accelerationCommercials as $accelerationCommercial){
                                            echo '<option value="'.$accelerationCommercial->id.'">'.$accelerationCommercial->Member.'</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <a></a>
                                <a class="btn addBtn" data-toggle="modal" data-target=".EntrepreneurProgrammeModal" id="addProgramme"><span style="font-size: 12px;" class="glyphicon glyphicon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <strong>Has your business undertaken or completed an accelerator programme? Provided that the entity has been operating the programme for 6 months and has provided a complete programme to at least one cohort of entrepreneurs.
                    </strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="cohortOfEntrepreneurs">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="cohortOfEntrepreneurs">No</label>
                    </div>
                </div>

                <div>
                    <strong>Has your business issued $50,000 or more in shares to a third party who was not an associate and did not acquire those shares to help another entity become entitled to the tax incentives? </strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="taxIncentives">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="taxIncentives">No</label>
                    </div>
                </div>

                <div>
                    <strong>Does your business have a standard patent or plant breeder's right, or the equivalent in another country within the past 5 years?  </strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="standardPatent">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="standardPatent">No</label>
                    </div>
                </div>

                <div>
                    <strong>Does your business have an innovation patent or design right or the equivalent in another country within the the past 5 years?</strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="innovationPatent">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="innovationPatent">No</label>
                    </div>
                </div>

                <div>
                    <strong>Does your business hold a license to IP that falls into either of the previous 2 categories? </strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="previous2Categories">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="previous2Categories">No</label>
                    </div>
                </div>

                <div>
                    <strong>Does your business have a written agreement to co-develop and commercialise an innovation with a university or a research organization? </strong>
                    <div class="radio">
                        <label><input type="radio" value="Yes" name="researchOrganization">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="No" name="researchOrganization">No</label>
                    </div>
<!--                    Div For Selector-->
                    <div class="selectorDiv" id="selectorUniversityDiv">
                        <label for="selectorUniversity">Select University</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <select class="select2Style" id="selectorUniversity" style="width: 90%">
                                    <option value="0">Select...</option>
                                    <?php
                                    if(isset($institutions) and !empty($institutions)){
                                        foreach($institutions as $institution){
                                            echo '<option value="'.$institution->id.'">'.$institution->institution.'</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <a></a>
                                <a class="btn addBtn" data-toggle="modal" data-target=".InstitutionModal" id="addSelectorUniversity"><span style="font-size: 12px;" class="glyphicon glyphicon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </fieldset>

            <button id="SaveAccount" type="submit" class="btn btn-primary submit">Submit form</button>

        </form>

    </div></div>

<!--Working on Modals-->

<div class="modal InstitutionModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="Institution">Institution Name</label>
                    <input id="Institution" name="institution" type="text" class="form-control" placeholder="Institution" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="addInstitution" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="modal EntrepreneurProgrammeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="Member">Programme Member Name</label>
                    <input id="Member" name="Member" type="text" class="form-control" placeholder="Member" />
                </div>
                <div class="form-group">
                    <label for="Web_Address">Web Address</label>
                    <input id="Web_Address" name="Web_Address" type="text" class="form-control" placeholder="Web Address" />
                </div>
                <div class="form-group">
                    <label for="State_Territory">State Territory</label>
                    <input id="State_Territory" name="State_Territory" type="text" class="form-control" placeholder="State_Territory" />
                </div>
                <div class="form-group">
                    <label for="Project_Location">Project Location</label>
                    <input id="Project_Location" name="Project_Location" type="text" class="form-control" placeholder="Project_Location" />
                </div>
                <div class="form-group">
                    <label for="Project_Title">Project Title</label>
                    <input id="Project_Title" name="Project_Title" type="text" class="form-control" placeholder="Project_Title" />
                </div>
                <div class="form-group">
                    <label for="Project_Summary">Project Summary</label>
                    <input id="Project_Summary" name="Project_Summary" type="text" class="form-control" placeholder="Project_Summary" />
                </div>
                <div class="form-group">
                    <label for="Market">Market</label>
                    <input id="Market" name="Market" type="text" class="form-control" placeholder="Market" />
                </div>
                 <div class="form-group">
                    <label for="Technology">Technology</label>
                    <input id="Technology" name="Technology" type="text" class="form-control" placeholder="Technology" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="addEntrepreneurProgramme" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $("input[name='incorporatedAus']").on("change",function(){
            if($(this).val() === 'Between six and three years ago'){
                $("#whollyOwned").show();
                console.log("show");
            }else{
                $("#whollyOwned").hide();
            }
        });
    });
</script>
<script type="text/javascript" src="<?=base_url()?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#selectorUniversity, #selectAcceleration").select2();

        $("input[name=EntrepreneurProgramme]").on("change",function(){
            var EntrepreneurProgramme = $(this).val();
            if(EntrepreneurProgramme === 'Yes'){
                $("#EntrepreneurProgramme").css('display','block');
            }else{
                $("#EntrepreneurProgramme").css('display','none');
            }
        });

        $("input[name=researchOrganization]").on("change",function(){
            var researchOrganization = $(this).val();
            if(researchOrganization === 'Yes'){
                $("#selectorUniversityDiv").css('display','block');
            }else{
                $("#selectorUniversityDiv").css('display','none');
            }
        });


        $("#addInstitution").on("click",function(){
            var Institution = $("#Institution");
            var InstitutionValue = Institution.val();
            if(InstitutionValue.length === 0){
                Institution.parents(".form-group").addClass('has-error');
                return false ;
            }else{
                Institution.parents(".form-group").removeClass('has-error');
            }
            var InstitutionCheck='0';
            var InstitutionFilter = $('#selectorUniversity option').filter(
                function(){ 
                    if($(this).html().toLowerCase() == InstitutionValue.toLowerCase()){  
                        var valuecheck       = $(this).val();
                        var selectUniversity = $("#selectorUniversity").select2();
                        selectUniversity.val(valuecheck).trigger("change");
                        InstitutionCheck ='1';
                        $('.InstitutionModal').modal().hide();
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                    }
                });
            if(InstitutionCheck=='0'){
                $.ajax({
                    url: "<?=base_url()?>Reg/addInstitution",
                    type:"POST",
                    data:{institution:InstitutionValue},
                    success:function(output){
                            var  data =  output.split('::');
                               if(data[0]=='OK'){
                                   var institutionId   = data[1];
                                   var institutionName = data[2];
                                   var newOption = new Option(institutionName,institutionId, true, true);
                                    $("#selectorUniversity").append(newOption).trigger('change');
                                    $('.InstitutionModal').modal().hide();
                                    $('body').removeClass('modal-open');
                                    $('.modal-backdrop').remove();
                                }else if(data[0]=='Existed'){
                                    var InstitutionNameValue = $('#selectorUniversity option').filter(function (){ 
                                        return $(this).html() == InstitutionValue}).val();
                                    var selectUniversity     = $("#selectorUniversity").select2();
                                    selectUniversity.val(InstitutionNameValue).trigger("change"); 
                                    $('.InstitutionModal').modal().hide();
                                    $('body').removeClass('modal-open');
                                    $('.modal-backdrop').remove();
                                }
                    }
                });

            }
        });
        $("#addEntrepreneurProgramme").on("click",function(){
            var Member = $("#Member");  
            var MemberValue = Member.val();
            if(MemberValue.length === 0){
                Member.parents(".form-group").addClass('has-error');
                return false ;
            }else{
                Member.parents(".form-group").removeClass('has-error');
            }
            var Web_Address         = $("#Web_Address").val();
            var Project_Title       = $("#Project_Title").val();
            var State_Territory     = $("#State_Territory").val();
            var Project_Summary     = $("#Project_Summary").val();
            var Project_Location    = $("#Project_Location").val();
            var Market              = $("#Market").val();
            var Technology          = $("#Technology").val();
            var ProgrammeNameCheck  = '0';
            var ProgrammeFilter  = $('#selectAcceleration option').filter(
                function(){ 
                    if($(this).html() == MemberValue){
                        var valuecheck      = $(this).val();
                        var selectProgramme = $("#selectAcceleration").select2();
                        selectProgramme.val(valuecheck).trigger("change"); 
                        ProgrammeNameCheck  = '1';
                        $('.EntrepreneurProgrammeModal').modal().hide();
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                    }
                });
            if(ProgrammeNameCheck=='0'){
                $.ajax({
                    url: "<?=base_url()?>Reg/addEntrepreneurProgramme",
                    type:"POST",
                    data:{
                        Market:Market,
                        Member:MemberValue,
                        Technology:Technology,
                        Web_Address:Web_Address,
                        Project_Title:Project_Title,
                        State_Territory:State_Territory,
                        Project_Summary:Project_Summary,
                        Project_Location:Project_Location
                    },
                    success:function(output){
                        var  data =  output.split('::');
                        if(data[0]=='OK'){
                            var programmeId   = data[1];
                            var programmeName = data[2]; 
                            var newOption = new Option(programmeName,programmeId, true, true);
                                $("#selectAcceleration").append(newOption).trigger('change');
                                $('.EntrepreneurProgrammeModal').modal().hide();
                                $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();
                        }else if(data[0]=='Existed'){
                            var ProgrammeNameValue = $('#selectAcceleration option').filter(function () { return $(this).html() == ProgrammeValue}).val();
                            var valuecheck         = $(this).val();
                            var selectProgramme    = $("#selectAcceleration").select2();
                            selectProgramme.val(ProgrammeNameValue).trigger("change");  
                            $('.EntrepreneurProgrammeModal').modal().hide();
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                        }
                    }
                });
            }
        });
    });
</script>
</body>
</html>
