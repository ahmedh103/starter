
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      @include('includes.nav')
        <div class="flex-center position-ref full-height">
           
              
          

            <div class="content">
                <div class="title m-b-md">
              {{__('messages.Add your offer')}}    

                </div>
                @if (Session::has('success'))
                    
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                  </div>
                  
                @endif
              <form method="POST" action="{{route('offers.update',$offer->id) }}">
                    @csrf
                  {{-- <input  type="_token" value="{{csrf_token}}">--}} 
                    <div class="form-group">
                      <label for="exampleInputEmail1">              {{__('messages.Offer Name Ar')}}    
                        </label>
                      <input type="text" class="form-control" value="{{$offer->name_ar}}" id="exampleInputEmail1" name="name_ar" aria-describedby="emailHelp" placeholder="Name">
                      @error('name_ar')
                      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">              {{__('messages.Offer Name En')}}    
                        </label>
                      <input type="text" class="form-control" value="{{$offer->name_en}}" id="exampleInputEmail1" name="name_en" aria-describedby="emailHelp" placeholder="Name">
                      @error('name_en')
                      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1"> {{__('messages.Offer Price')}}  </label>
                      <input type="text" class="form-control"value="{{$offer->price}}" name="price" id="exampleInputPassword1" placeholder="Price">
                      @error('price')
                          
        
                      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">{{__('messages.Offer Details Ar')}}</label>
                      <input type="text" class="form-control" value="{{$offer->details_ar}}" name="details_ar" id="exampleInputPassword1" placeholder="Details">
                      @error('details_ar')
                      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
@enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">{{__('messages.Offer Details En')}}</label>
                      <input type="text" value="{{$offer->details_en}}" class="form-control" name="details_en" id="exampleInputPassword1" placeholder="Details">
                      @error('details_en')
                      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
@enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary">{{__('messages.Save')}}</button>
                  </form> 
            </div>
        </div>


        {{-- bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        

    </body>
</html>
