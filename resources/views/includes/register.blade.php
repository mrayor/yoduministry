<div class="col-lg-7 default-container ">
    <div class="business_form_custom mt-3">

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>

        <a href="{{route('home')}}" class="corpo-r-btn btn-style-five" style="bottom:10px;">Go Home</a> @else

        <form action="{{route('postRegister')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." value="{{ old('name')}}">
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." value="{{ old('email')}}">
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                        <input name="number" type="numeric" class="form-control" id="subject" placeholder="08012345678" value="{{ old('number')}}">
                        <small class="text-danger">{{ $errors->first('number') }}</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your comments..." value="{{ old('comments')}}"></textarea>
                        <small class="text-danger">{{ $errors->first('comments') }}</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class=" form-group">
                        <input type="submit" class="btn btn_custom corpo-r-btn btn-style-two" value="Register">
                    </div>
                </div>
            </div>
        </form>
        @endif


    </div>
</div>
