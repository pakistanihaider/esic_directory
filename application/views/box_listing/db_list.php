<?php
/*echo "<pre>";
var_dump($links);
echo "</pre>";
*/?>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/boxlisting.css">
<style type="text/css">
    .container-box{
    /*background-image: url("uploads/8/4/3/6/84367404/background-images/561993498.jpg") !important;
    background-repeat: no-repeat !important;
    background-position: 50.00% 19.91% !important;
    background-size: 100% 100%!important;
    background-color: transparent !important;*/
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--script src="https://raw.githubusercontent.com/cowboy/jquery-bbq/v1.2.1/jquery.ba-bbq.min.js"></script-->
<div class="content-shell">
    <div class="content-wrap" id="wrap">
        <div class="content">
                <div class="module">
                    <div class="module-section">
                        <!--h3>Search by Location</h3-->
                        <div class="filter form">
                            <div class="filter3" id="filter">
                                <div class="searchbox">
                                    <input type="text" value="" name="location_value" id="location_search"
                                       class="locationSuggest ac_input" placeholder="Name, website"
                                       autocomplete="off">
                                </div>
                                <div class="selectFilters sectors">
                                     <select id="sectorsSelect" placeholder="Select Sector">
                                        <option value="" disabled selected>Select Sector</option>
                                        <?php
                                        if(isset($sectors) and !empty($sectors)){
                                            foreach($sectors as $sector){
                                                if(!empty($sector->sector))
                                                echo '<option value="'.$sector->id.'">'.$sector->sector.'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                 <div class="selectFilters company">
                                    <select id="companySelect" placeholder="Select Company">
                                        <option value="" disabled selected>Select Company</option>
                                        <?php
                                        if(isset($company) and !empty($company)){
                                            $checkArray = array();
                                            foreach($company as $company){
                                                if(!empty($company->company)){
                                                   if (!(in_array($company->company, $checkArray))){
                                                            echo '<option value="'.$company->id.'">'.$company->company.'</option>';
                                                            array_push($checkArray, $company->company);
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="filter-inner" id="sort-filters">
                                <div class="sortFilters">
                                    <select id="dateAddedOrderSelect" placeholder="Order By date added">
                                        <option value="" disabled selected>Order by date added</option>
                                        <option value="asc">Newest</option>
                                        <option value="desc">Oldest</option>
                                    </select>
                                </div>
                                <div class="sortFilters">
                                    <select id="assessmentOrderSelect" placeholder="Order By Incoporate date">
                                        <option value="" disabled selected>Order by Incoporate date</option>
                                        <option value="asc">Newest</option>
                                        <option value="desc">Oldest</option>
                                    </select>
                                </div>
                                <div class="sortFilters">
                                    <select id="expiryOrderSelect" placeholder="Order By expiry date">
                                        <option value="" disabled selected>Order by expiry date</option>
                                        <option value="asc">Newest</option>
                                        <option value="desc">Oldest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="filter_submit">
                            <button  id="filter_search" class="hero-link green-bg" value="Search Now" data-val = "0">Search Now</button>
                            <button  id="filter_reset" class="hero-link green-bg" value="Reset" data-val = "0">Reset</button>  
                        </div>
                    </div>
                </div>
            <div class="new-results" >
                <?php

                if(!empty($usersResult) && is_array($usersResult)){
                    echo '<ul id="regList" class="product-list" >';
                    echo '</ul>';
                }

                ?>

                <div class="clear"></div>
                 <div class="btn-more container" style="text-align: center">
                    <button class="btn" id="load_more" data-val = "0">Load more..
                        <img style="display: none" id="loader" src="<?php echo str_replace('index.php','',base_url()) ?>assets/loader.GIF"> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="loading-submit">
    <img src="<?=base_url();?>assets/images/loading.gif" alt="loading">
</div>
 
<script>
    jQuery(document).ready(function($){
        getlist(0);
        var sectorsSelect,companySelect,searchInput,OrderSelect,OrderSelectValue,AdOrderSelect,ASOrderSelect,ExOrderSelect,AdOrderSelectValue,ASOrderSelectValue,ExOrderSelectValue;
        $("body").on("click","a.permalink",function(e) {
            e.preventDefault();
            var linkId = $(this).attr('data-link');
            //console.log('link'+linkId);
            redirectToLink(linkId);
        });
        $("#filter_reset").click(function(e){
            e.preventDefault();
            $(".module select").val($("module select option:first").val());
            $(".module input").val('');
        });
        $('#dateAddedOrderSelect').change(function(){
            OrderSelect = 'added_date';
            var selectvalue = $(this).val();
            $(".module #sort-filters select").val($(".module #sort-filters select option:first").val());
            $(this).val(selectvalue);
            var selectstring = JSON.stringify(selectvalue);
            if(selectstring == '"asc"'){
                OrderSelectValue = 'asc';
            }else{
                OrderSelectValue = 'desc';
            }
        });
        $('#assessmentOrderSelect').change(function(){
            OrderSelect = 'corporate_date';
            var selectvalue = $(this).val();
            $(".module #sort-filters select").val($(".module #sort-filters select option:first").val());
            $(this).val(selectvalue);
            var selectstring = JSON.stringify(selectvalue);
            if(selectstring == '"asc"'){
                OrderSelectValue = 'asc';
            }else{
                OrderSelectValue = 'desc';
            }
        });
        $('#expiryOrderSelect').change(function(){
            OrderSelect = 'expiry_date';
            var selectvalue = $(this).val();
            $(".module #sort-filters select").val($(".module #sort-filters select option:first").val());
            $(this).val(selectvalue);
            var selectstring = JSON.stringify(selectvalue);
            if(selectstring == '"asc"'){
                OrderSelectValue = 'asc';
            }else{
                OrderSelectValue = 'desc';
            }
            //console.log('s'+OrderSelectValue+' cc '+selectstring);
        });
        $("#load_more").click(function(e){
            e.preventDefault();
            var clickBtn ='load_more';
            var page = $(this).data('val');
            //console.log('page ='+page);
            $("#load_more").addClass('loading');
            $("#loader").show();
            searchInput = $('#location_search').val();
            companySelect = $('#companySelect option:selected').text();
            sectorsSelect = $('#sectorsSelect option:selected').text();
            AdOrderSelect = $('#dateAddedOrderSelect option:selected').text();
            ASOrderSelect = $('#assessmentOrderSelect option:selected').text();
            ExOrderSelect = $('#expiryOrderSelect option:selected').text();

            //console.log(searchInput);
            companySelectValue = $('#companySelect option:selected').val();
            sectorsSelectValue = $('#sectorsSelect option:selected').val();
            AdOrderSelectValue = $('#dateAddedOrderSelect option:selected').val();
            ASOrderSelectValue = $('#assessmentOrderSelect option:selected').val();
            ExOrderSelectValue = $('#expiryOrderSelect option:selected').val();
            if(searchInput!='' || companySelectValue!='' || sectorsSelectValue!='' || AdOrderSelectValue!='' || ASOrderSelectValue!='' || ExOrderSelectValue!='' ){
                //$("#regList").html('');
                callfilter(clickBtn);
                return false;
            }
            setTimeout(function(){
                 getlist(page);
              }, 500);
        });
        $("#filter_search").click(function(e){
            e.preventDefault();
            var clickBtn ='filter_search';
            callfilter(clickBtn);
        });
        $("body").on("click","#back",function(e){
            e.preventDefault();
            $('.content-shell #wrap .content').slideDown('slow');
            $('.content-shell #wrap .single-item').slideUp('slow');  
            $('.content-shell #wrap .single-item').remove();
            $(this).parent().remove();
            return false;    
        });
        function callfilter(clickBtn){
                var page = $("#filter_search").data('val');
                //console.log('page ='+page);
                if(clickBtn=='filter_search'){
                    if(sectorsSelect != $('#sectorsSelect option:selected').text()){
                        page = 0;
                    }
                    if(companySelect != $('#companySelect option:selected').text()){
                        page = 0;
                    }
                }
                searchInput = $('#location_search').val();
                companySelect = $('#companySelect option:selected').text();
                sectorsSelect = $('#sectorsSelect option:selected').text();
                //AdOrderSelect = $('#dateAddedOrderSelect option:selected').text();
                //ASOrderSelect = $('#assessmentOrderSelect option:selected').text();
                //ExOrderSelect = $('#expiryOrderSelect option:selected').text();

                //console.log(searchInput);
                companySelectValue = $('#companySelect option:selected').val();
                sectorsSelectValue = $('#sectorsSelect option:selected').val();
                //AdOrderSelectValue = $('#dateAddedOrderSelect option:selected').val();
                //ASOrderSelectValue = $('#assessmentOrderSelect option:selected').val();
                //ExOrderSelectValue = $('#expiryOrderSelect option:selected').val();
                //console.log('OrderSelectValue'+OrderSelectValue);
        if(searchInput=='' && companySelectValue=='' && sectorsSelectValue=='' && OrderSelectValue=='' ){
                    $("#regList").html('');
                    getlist(0);
                    return false;
                }
                if(companySelectValue==''){
                    companySelect='';
                }else{
                   companySelect = '"'+companySelect+'"';
                }
                if(sectorsSelectValue==''){
                    sectorsSelect='';
                }
                $("#load_more").addClass('loading');
                $("#loader").show();
                setTimeout(function(){
                     getfilterlist(page,searchInput,sectorsSelectValue,companySelect,OrderSelect,OrderSelectValue);
                  }, 500);
        }

        function getfilterlist(page,searchInput,secSelect,comSelect,orderSelect,orderSelectValue){
            if(orderSelect==undefined){
                orderSelect='';
                orderSelectValue ='';
            }
            
            $.ajax({
                url:"<?php echo base_url() ?>Esic2/getfilterlist",
                type:'GET',
                data: {page:page,
                    searchInput:searchInput,
                    secSelect:secSelect,
                    comSelect:comSelect,
                    orderSelect:orderSelect,
                    orderSelectValue:orderSelectValue
                    }
            }).done(function(response){
                if(page==0){
                    $("#regList").html('');
                }
                if(response=='NORESULT'){
                    $("#loader").hide();
                    $("#load_more").removeClass('loading');
                    $('#load_more').hide();
                    $('#no-result').remove();
                    $('.btn-more').append('<div id="no-result">Sorry No More Result Found.</div>');
                    //console.log(response);
                }else{
                     //console.log(response);
                    $("#regList").append(response);
                    $("#loader").hide();
                    $("#load_more").removeClass('loading');
                    $('#filter_search').data('val', ($('#filter_search').data('val')+1));
                    scroll();
                }
                
            });
        }
        function getlist(page){
            
            $.ajax({
                url:"<?php echo base_url() ?>Esic2/getlist",
                type:'GET',
                data: {page:page}
            }).done(function(response){
                if(response=='NORESULT'){
                    $("#loader").hide();
                    $("#load_more").removeClass('loading');
                    $('#load_more').hide();
                    $('#no-result').remove();
                    $('.btn-more').append('<div id="no-result">Sorry No More Result Found.</div>');
                    //console.log(response);
                }else{
                     //console.log(response);
                    $("#regList").append(response);
                    $("#loader").hide();
                    $("#load_more").removeClass('loading');
                    $('#load_more').data('val', ($('#load_more').data('val')+1));
                    if(page!=0){
                        scroll();
                    }
                }
                
            });
        }
     
        function scroll(){
            return 0;
            //$('html, body').animate({
              //  scrollTop: $('#load_more').offset().top
            //}, 1000);
        }
        function redirectToLink(id){
            //console.log('ID'+id);
            $('#loading-submit').show();
            $.ajax({
                url:"<?php echo base_url() ?>Esicdetails/getdetails",
                type:'GET',
                data: {id:id}
            }).done(function(response){
                $('.content-shell #wrap .single-item.list-item').remove();
                $('.content-shell #wrap .btn-back').remove();
                $('.content-shell #wrap .content').slideUp('slow');
                $('.content-shell #wrap').css('min-height', '500px');
                $('.content-shell #wrap').append(response);          
                $('.content-shell #wrap').append('<div class="btn-back container"><a href="back-btn" id="back"  class="btn">Back</a></div>');
                $('#loading-submit').hide();
            });
        }
    });
/*
    $(function(){
  
          // For each .bbq widget, keep a data object containing a mapping of
          // url-to-container for caching purposes.
          $('#single-container').each(function(){
            $(this).data( 'single-container', {
              cache: {
                // If url is '' (no fragment), display this div's content.
                '': $(this).find('#regList')
              }
            });
          });
          
          // For all links inside a .bbq widget, push the appropriate state onto the
          // history when clicked.
          $('.btn-back a[href^=#]').live( 'click', function(e){
            var state = {},
              
              // Get the id of this .bbq widget.
              id = $(this).closest( '.single-container' ).attr( 'id' ),
              
              // Get the url from the link's href attribute, stripping any leading #.
              url = $(this).attr( 'href' ).replace( /^#/, '' );
            
            // Set the state!
            state[ id ] = url;
            $.bbq.pushState( state );
            
            // And finally, prevent the default link click behavior by returning false.
            return false;
          });
          
          // Bind an event to window.onhashchange that, when the history state changes,
          // iterates over all .bbq widgets, getting their appropriate url from the
          // current state. If that .bbq widget's url has changed, display either our
          // cached content or fetch new content to be displayed.
          $(window).bind( 'hashchange', function(e) {
            
            // Iterate over all .bbq widgets.
            $('.bbq').each(function(){
              var that = $(this),
                
                // Get the stored data for this .bbq widget.
                data = that.data( 'bbq' ),
                
                // Get the url for this .bbq widget from the hash, based on the
                // appropriate id property. In jQuery 1.4, you should use e.getState()
                // instead of $.bbq.getState().
                url = $.bbq.getState( that.attr( 'id' ) ) || '';
              
              // If the url hasn't changed, do nothing and skip to the next .bbq widget.
              if ( data.url === url ) { return; }
              
              // Store the url for the next time around.
              data.url = url;
              
              // Remove .bbq-current class from any previously "current" link(s).
              that.find( 'a.bbq-current' ).removeClass( 'bbq-current' );
              
              // Hide any visible ajax content.
              that.find( '.bbq-content' ).children( ':visible' ).hide();
              
              // Add .bbq-current class to "current" nav link(s), only if url isn't empty.
              url && that.find( 'a[href="#' + url + '"]' ).addClass( 'bbq-current' );
              
              if ( data.cache[ url ] ) {
                // Since the widget is already in the cache, it doesn't need to be
                // created, so instead of creating it again, let's just show it!
                data.cache[ url ].show();
                
              } else {
                // Show "loading" content while AJAX content loads.
                that.find( '.bbq-loading' ).show();
                
                // Create container for this url's content and store a reference to it in
                // the cache.
                data.cache[ url ] = $( '<div class="bbq-item"/>' )
                  
                  // Append the content container to the parent container.
                  .appendTo( that.find( '.bbq-content' ) )
                  
                  // Load external content via AJAX. Note that in order to keep this
                  // example streamlined, only the content in .infobox is shown. You'll
                  // want to change this based on your needs.
                  .load( url, function(){
                    // Content loaded, hide "loading" content.
                    that.find( '.bbq-loading' ).hide();
                  });
              }
            });
          })
          
          // Since the event is only triggered when the hash changes, we need to trigger
          // the event now, to handle the hash the page may have loaded with.
          $(window).trigger( 'hashchange' );
  
    });*/
 
</script>
