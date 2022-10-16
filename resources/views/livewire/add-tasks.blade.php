<div>
    <h3 class="h3" style="color: white"> Add BlogPosts Is Here</h3>
        <div class="form-group" style="color: white">
            <label for="exampleInputEmail1" style="color: white">BlogPost Title</label>
            <input type="text" class="form-control mt-2" id="exampleInputEmail1"
                   aria-describedby="emailHelp" name="title" value="{{old('title')}}" wire:model="blogPostTitle">
        </div>
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group" style="color: white">
            <label for="exampleInputPassword1" class=" mt-3">BlogPost Content</label>
            <input type="text" class="form-control " id="exampleInputPassword1" name="content" value="{{old('content')}}"
            wire:model="blogPostContent">
        </div>
        @error('content')
        <span class="text-danger">{{$message}} </span>
        @enderror
        <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary mx-auto col-8" wire:click="addBlogPost">Submit</button>
        </div>

</div>
