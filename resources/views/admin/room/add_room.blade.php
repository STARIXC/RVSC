@extends('layouts.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="row">
    <div class="col-12">
        @if (session('success'))
        <span class="alert alert-success">
            {{ section('success') }}
        </span>
        @endif

        <div class="card card-default bg-gray-300">
            <div class="card-header card-header-border-bottom">
                <h2>Add New Room</h2>
            </div>
            <div class="card-body">
                <div class="form-body">

                    <form method="POST" action="{{ route('store.room') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('roomtype')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1">Room Type or Category</label>
                                    <select type="text" name="roomtype" id="roomtype" value="" class="form-control">
                                        <option value="">Choose Room Type</option>
                                        @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->category_name }}-{{ $item->room_type }}-{{ $item->description }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('roomname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1">Room Name</label> <input type="text"
                                        class="form-control" name="roomname" value=""> </div>
                            </div>
                        </div>


                        <!-- <div class="form-group"> <label for="exampleInputEmail1">Room Size</label> <input type="text" class="form-control" name="roomsize" value="" > </div> -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    @error('maxadult')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror <label for="exampleInputEmail1">Max Adult</label> <input type="text"
                                        class="form-control" name="maxadult" value=""> </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    @error('maxchild')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror <label for="exampleInputEmail1">Max Child</label> <input type="text"
                                        class="form-control" name="maxchild" value=""> </div>
                            </div>
                            <div class="col-md-4">


                                <div class="form-group">
                                    @error('nobed')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1">No. of Bed</label> <input type="text"
                                        class="form-control" name="nobed" value=""> </div>
                            </div>
                        </div>



                        <div class="form-group">
                            @error('roomdes')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror <label for="exampleInputEmail1">Room Description</label>
                            <textarea type="text" class="form-control" name="roomdes" value=""></textarea>
                         </div>
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="control control-checkbox checkbox-primary">Pets Allowed
                                            <input type="checkbox" id="checkbox_2" name="roompet" value="1">
                                            <div class="control-indicator"></div>
                                        </label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="control control-checkbox checkbox-primary">Featured Room
                                            <input type="checkbox" id="checkbox_3" name="roomfeatured" value="1">
                                            <div class="control-indicator"></div>
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                
                                    <div class="controls">
                                        <label class="control control-checkbox checkbox-primary">Includes Breakfast
                                            <input type="checkbox" id="checkbox_4" name="roombreakfast" value="1">
                                            <div class="control-indicator"></div>
                                        </label>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('imagemain')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1">Room Main Image</label>
                                    <input type="file" class="form-control" name="imagemain" value=""
                                        onchange="mainImageUrl(this)">
                                    <img src="" alt="" class="thumbnail p-1 m-1" id="mainImageThumb">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <label for="exampleInputEmail1">Other Images</label> <input
                                        type="file" class="form-control" name="multi_img[]" multiple="" id="multi_img">
                                    <div class="row">
                                        <div class="col-md-12" id="preview_img"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Room Facility <span class="text-info">(***Please select the appropriate room Features)</span></label>
                            <div class="col-md-12">
                                <select class="form-control js-example-basic-multiple" multiple data-live-search="true"
                                name="roomfac[]" id="roomfac">

                                <option value="Plush pillows and breathable bed linens">Plush pillows and breathable bed
                                    linens</option>
                                <option value="Soft oversized bath towels">Soft oversized bath towels</option>
                                <option value="Full-sized pH-balanced toiletries">Full-sized pH-balanced toiletries
                                </option>
                                <option value="Complimentary refreshments">Complimentary refreshments</option>
                                <option value="Adequate safety/security">Adequate safety/security</option>
                                <option value="Internet">Internet</option>
                                <option value="Comfortable beds">Comfortable beds</option>
                            </select>
                            </div>
                            
                        </div>

                </div>
                <button type="submit" class="btn btn-info btn-md" name="submit">Add Room</button>

                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function mainImageUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainImageThumb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
{{--  multiple image preview script  --}}
<script type="text/javascript">
    $('#multi_img').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb m-1').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });

</script>


@endsection