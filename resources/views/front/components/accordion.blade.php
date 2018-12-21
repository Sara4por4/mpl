<!-- begin: accord element -->
<div class="accordion">

  <div class="accordion__header">
    <div data-toggle="collapse" data-target="#collapse{{$id}}" role="button" aria-expanded="true">
      <h3 class="accordion__title subtitle"><span class="open">+ </span><span class="closed">- </span>{{$title}}</h3>
    </div>
  </div>

  <div id="collapse{{$id}}" class="collapse">
     <div class="accordion__body text editable">
       {!! $text !!}
      </div>
   </div>

</div>
<!-- end: accord element -->
