<!-- Section - Offer -->
<section class="section bg-dark">
    <!-- BG Image -->
    <div class="bg-image-holder"><img src="{{ asset('frontend/img/photos/offer-bg.jpg') }}" alt=""></div>

    <!-- Content -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 pl-lg-5 pt-5 pt-lg-0 dark">
                <h2 class="mb-2">CONTACT US</h2>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>SUCCESS - </strong>{{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('sendMessage') }}" method="POST" data-validate>
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter here" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter here" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number:</label>
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter here" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="98%" rows="5" required></textarea>
                    </div>
                    <button class="btn btn-primary btn-submit btn-block" type="submit">
                        <span class="description">Submit</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

</section>
