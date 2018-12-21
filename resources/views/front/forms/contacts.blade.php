<form class="form form--contacts" action="index.html" method="post">
  <div class="row">

    <div class="form-group col-sm-6">
      <label for="subject">Subject*</label>
      <input id="subject" type="text" name="subject" value="">
    </div>
    <div class="form-group col-xs-12">
      <label for="message">Message*</label>
      <textarea id="message" name="message" rows="3" cols="80"></textarea>
    </div>
    <div class="form-group col-sm-6">
      <label for="name">Name or Nickname*</label>
      <input id="name" type="text" name="name" value="" placeholder="Please leave your name">
    </div>
    <div class="form-group col-sm-6">
      <label for="email">Email*</label>
      <input id="email" type="email" name="email" value="" placeholder="Please enter your email to mark this review as verified">
    </div>
    @include ('front.components.rgpd')
  </div>

  <div class="form__footer">
    <button type="send" name="button" class="btn btn--black">Send</button>
  </div>
</form>
