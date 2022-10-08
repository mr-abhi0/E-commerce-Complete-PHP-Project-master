<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_news.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p></p>
            <form action="ad_news.php"  method="post" class="aa-subscribe-form">
			<input type="hidden" name="ipaddress" size="100%" value="<?php

echo $_SERVER["REMOTE_ADDR"]; ?>">
           <input type="email" class="form-control unicase-form-control text-input" id="email" onBlur="userAvailability()" name="emailid" required >
	    	       <span id="user-availability-status1" style="font-size:12px;"></span>
              <input type="submit"  name="news" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>