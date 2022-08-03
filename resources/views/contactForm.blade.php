<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Contact Us</h4><hr>

                <form action="{{ route('send.email') }}" method="POST">
                    @csrf
                    <div class="form-group">
                       <label for="">Name</label>
                        <input type="text"class="form-control"name="name"placeholder="Enter your name"value="{{old('name')}}">
                      @error('name')<span class="text-danger">{{$message}}</span>@enderror

                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                         <input type="text"class="form-control"name="email"placeholder="Enter your email"value="{{old('email')}}">
                       @error('email')<span class="text-danger">{{$message}}</span>@enderror
 
                     </div>

                     <div class="form-group">
                        <label for="">subject</label>
                         <input type="text"class="form-control"name="subject"placeholder="Enter subject"value="{{old('subject')}}">
                       @error('subject')<span class="text-danger">{{$message}}</span>@enderror
 
                     </div>

                     <div class="form-group">
                        <label for="">message</label>
                        <textarea name="message"class="form-control"cols="4"rows="4">{{old('message')}}</textarea>

                       @error('message')<span class="text-danger">{{$message}}</span>@enderror
 
                     </div>

                     <button class="btn btn-primary">Send</button>

                </form>
            </div>
            </div>
        </div>
</body>
</html>