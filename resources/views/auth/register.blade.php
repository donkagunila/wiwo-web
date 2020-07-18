@extends('layouts.app')

@section('title', 'Register')

@section('content')


<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2><i class="sl sl-icon-user-follow"></i> Register</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Register</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>

<div class="container">

        <div class="row">
            <div class="col-lg-12">

                <div class="notification notice large margin-bottom-55">
                    <h4>Do you wish work with wiWo Now?</h4>
                    <p>If so, you can create an account by entering your details below and a wiWO Representative will get in touch with you.</p>
                </div>



                <div id="add-listing" class="separated-form">

                    <form action="{{ route('register') }}"
                          method="post"
                          enctype="multipart/form-data">

                    @csrf

                    <!-- Section -->
                    <div class="add-listing-section">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-doc"></i> Login Informations</h3>
                        </div>

                        <!-- Title -->
                        <div class="row with-forms">
                            <div class="col-md-6">
                                <h5>Username</h5>
                                <input class="search-field"
                                        type="text"
                                        name="username"
                                        placeholder="Username" />
                                     @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6">
                                <h5>Email</h5>
                                <input class="search-field"
                                       type="email"
                                       name="email"
                                       placeholder="name@email.com"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row">

                            <div class="col-md-6">
                                <h5>{{ __('Password') }}</h5>

                                <input id="password"
                                       type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       required
                                       autocomplete="new-password"
                                       placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6">

                                <h5>Confirm Password</h5>

                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Complete Password">
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="add-listing-section margin-top-45">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                        </div>

                        <!-- Title -->
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <h5>Artist Name <i class="tip" data-tip-content="Individual / Band / Group"></i></h5>
                                <input class="search-field"
                                        type="text"
                                        name="name" />
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-6">
                                <h5>Category</h5>
                                <select class="chosen-select-no-single"
                                        name="category" >
                                    <option selected>Select Category</option>
                                    <option value="Bongo Flava">Bongo Flava</option>
                                    <option value="Traditional Music">Traditional Music</option>
                                    <option value="African Pop">African Pop</option>
                                    <option value="Taarab">Taarab</option>
                                    <option value="Hip hop">Hip hop</option>
                                    <option value="Reggae">Reggae</option>
                                    <option value="Gospel">Gospel</option>
                                    <option value="Kisingeli">Kisingeli</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                            <!-- Type -->
                            <div class="col-md-6">
                                <h5>Upload Profile Picture <i class="tip" data-tip-content="Dimensions 640px * 640px"></i></h5>
                                <input type="file" name="image" value=""/>
                            </div>

                        </div>
                        <!-- Row / End -->
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="add-listing-section margin-top-45">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-location"></i> Location</h3>
                        </div>

                        <div class="submit-section">

                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- City -->
                                <div class="col-md-6">
                                    <h5>City</h5>
                                    <select class="chosen-select-no-single" name="city" >
                                        <option selected>Select City</option>
                                        <option value="Dar es salaam">Dar es salaam</option>
                                        <option value="Morogoro">Morogoro</option>
                                    </select>
                                </div>

                                <!-- Address -->
                                <div class="col-md-6">
                                    <h5>Address</h5>
                                    <input type="text" name="address" placeholder="e.g. 15 Ohio Street">
                                </div>

                                <!-- City -->
                                <div class="col-md-6">
                                    <h5>Country</h5>
                                    <input type="text" name="country" placeholder="Country">
                                </div>

                                <!-- Zip-Code -->
                                <div class="col-md-6">
                                    <h5>Zip-Code</h5>
                                    <input type="text" name="zip">
                                </div>

                            </div>
                            <!-- Row / End -->

                        </div>
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="add-listing-section margin-top-45">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-docs"></i> Details</h3>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Phone -->
                            <div class="col-md-6">
                                <h5>Phone <span>(optional)</span></h5>
                                <input type="text" name="phone">
                            </div>

                            <!-- Website -->
                            <div class="col-md-6">
                                <h5>Website <span>(optional)</span></h5>
                                <input type="text" name="website">
                            </div>



                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Phone -->
                            <div class="col-md-3">
                                <h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>
                                <input type="text" name="facebook" placeholder="https://www.facebook.com/">
                            </div>

                            <!-- Website -->
                            <div class="col-md-3">
                                <h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optional)</span></h5>
                                <input type="text" name="twitter" placeholder="https://www.twitter.com/">
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-3">
                                <h5 class="instagram-input"><i class="fa fa-instagram"></i> Instagram <span>(optional)</span></h5>
                                <input type="text" name="instagram" placeholder="https://instagram.com">
                            </div>

                            <div class="col-md-3">
                                <h5 class="gplus-input"><i class="fa fa-youtube"></i> Youtube <span>(optional)</span></h5>
                                <input type="text" name="youtube" placeholder="https://youtube.com">
                            </div>

                        </div>
                        <!-- Row / End -->
                    </div>
                    <!-- Section / End -->

                    <button type="submit"
                            class="button preview margin-bottom-50">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                    </button>

                    </form>
                </div>
            </div>

        </div>

    </div>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
