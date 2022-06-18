@extends('layouts.app')
@section('title', 'Acceuil')

@section('content')

    <!-- Top Post Start -->
    <section class="top-post">
        <div class="container">
            <div class="title-shap">
                <h5>Derniers Posts</h5>
            </div>
            <div class="row">
                @foreach ($latest_posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="post-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="post-img">
                                    <img src="{{ asset($post->image) }}" alt="p-post">
                                    <div class="title-tag">
                                        <a href="#">{{ $post->category->name }}</a>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <div class="title">
                                        <a href="{{ route('details-post', $post->slug) }}">{{ limitText($post->description) }}</a>
                                    </div>
                                    <p>15-Augu-2020 | 5mins</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Top Post End -->
    <!-- All Post Start -->
    <section class="all-post">
        <div class="container">
            <div class="title-shap">
                <h5>List Posts</h5>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="f-post">
                        <div class="card">
                            <div class="card-body">
                                <div class="post-img">
                                    <img src="img/main-post/main-post-2.jpg" alt="main post">
                                    <div class="pink-shap">
                                        <a href="#">
                                            <div class="title">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.625 14.625">
                                                        <path class="a"
                                                            d="M9,1.688A7.313,7.313,0,1,0,16.313,9,7.311,7.311,0,0,0,9,1.688Zm2.531,5.344a.844.844,0,1,1-.844.844A.842.842,0,0,1,11.531,7.031Zm-5.062,0a.844.844,0,1,1-.844.844A.842.842,0,0,1,6.469,7.031ZM9,12.973a3.452,3.452,0,0,1-3.312-2.486.282.282,0,0,1,.271-.362h6.079a.283.283,0,0,1,.271.362A3.444,3.444,0,0,1,9,12.973Z"
                                                            transform="translate(-1.688 -1.688)"></path>
                                                    </svg>
                                                </div>
                                                <h6>Emulation</h6>
                                            </div>
                                            <div class="valu">
                                                <h6>competition</h6>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.001 10.496">
                                                        <path class="a"
                                                            d="M9.191,8,5.219,4.031a.747.747,0,0,1,0-1.059.756.756,0,0,1,1.063,0l4.5,4.5A.749.749,0,0,1,10.8,8.5L6.284,13.031a.75.75,0,0,1-1.062-1.059Z"
                                                            transform="translate(-4.998 -2.754)"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <div class="title">
                                        <a href="#">Having a keen eye for every task is one of the ways to success - 2020</a>
                                    </div>
                                    <div class="desc d-flex align-items-center">
                                        <div class="date">15 Aug</div>
                                        <p>Suscipit fringilla quod, ab mus laoreet? Consequuntur hymenaeos, laoreet tempore pharetra tempore, cursus atque, ipsum quisquam voluptates. Dignissim nostra laudantium luctus, ratione, dolores ipsa, magni
                                            maxime excepturi? Phasellus, deserunt blanditiis imperdiet sem...</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="profile">
                                                <div class="profile-img">
                                                    <img src="img/banner/b-profile-2.png" alt="blog profile">
                                                </div>
                                                <p>D. Alaska</p>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 10.5"
                                                    class="svg-1">
                                                    <g transform="translate(0 -1.75)">
                                                        <path class="a"
                                                            d="M.583,7S2.917,2.333,7,2.333,13.417,7,13.417,7,11.083,11.667,7,11.667.583,7,.583,7Z">
                                                        </path>
                                                        <path class="a"
                                                            d="M8.75,7A1.75,1.75,0,1,1,7,5.25,1.75,1.75,0,0,1,8.75,7Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <p>965</p>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 11.667 11.667" class="svg-2">
                                                    <path class="a"
                                                        d="M12.828,2.333a1.165,1.165,0,0,0-1.161-1.167H2.333A1.17,1.17,0,0,0,1.167,2.333v7A1.17,1.17,0,0,0,2.333,10.5H10.5l2.333,2.333-.006-10.5ZM10.5,8.167h-7V7h7Zm0-1.75h-7V5.25h7V6.417Zm0-1.75h-7V3.5h7V4.667Z"
                                                        transform="translate(-1.167 -1.167)"></path>
                                                </svg>
                                            </span>
                                            <p>965</p>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 10 14"
                                                    class="svg-1 svg-3">
                                                    <g transform="translate(-1.167 -0.583)">
                                                        <path class="a"
                                                            d="M12.25,2.917a1.75,1.75,0,1,1-1.75-1.75,1.75,1.75,0,0,1,1.75,1.75Z">
                                                        </path>
                                                        <path class="a"
                                                            d="M5.25,7A1.75,1.75,0,1,1,3.5,5.25,1.75,1.75,0,0,1,5.25,7Z">
                                                        </path>
                                                        <path class="a"
                                                            d="M12.25,11.083a1.75,1.75,0,1,1-1.75-1.75A1.75,1.75,0,0,1,12.25,11.083Z">
                                                        </path>
                                                        <path class="a" d="M5.011,7.881,8.995,10.2"></path>
                                                        <path class="a" d="M8.989,3.8,5.011,6.119"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <p>965</p>
                                        </li>
                                        <li>
                                            <div class="p-time">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                                        <path class="a"
                                                            d="M11,3A3,3,0,1,0,8,6,3,3,0,0,0,11,3ZM7.3,7.534C5.446,6.4,2.443,6.088.931,6A.865.865,0,0,0,0,6.848v6.963a.859.859,0,0,0,.828.845A16.811,16.811,0,0,1,6.86,15.951a.435.435,0,0,0,.64-.371V7.892a.416.416,0,0,0-.2-.358ZM15.069,6c-1.511.086-4.514.4-6.368,1.533a.424.424,0,0,0-.2.363v7.681a.436.436,0,0,0,.642.372,16.817,16.817,0,0,1,6.03-1.294A.86.86,0,0,0,16,13.811V6.848A.865.865,0,0,0,15.069,6Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <p>6 mns</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-post">
                        <ul>
                            <li>
                                <div class="l-post d-flex">
                                    <div class="post-img">
                                        <img src="img/l-post/l-post-1.jpg" alt="l-post-img">
                                    </div>
                                    <div class="post-title">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="title">
                                                    <a href="#">Having a keen eye for every task is one of the ways to success - 2020</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="tag">
                                                    <a href="#">Lifestyle</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="profile">
                                                    <div class="profile-img">
                                                        <img src="img/banner/b-profile-2.png" alt="blog profile">
                                                    </div>
                                                    <p>D. Alaska</p>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 14 10.5" class="svg-1">
                                                        <g transform="translate(0 -1.75)">
                                                            <path class="a"
                                                                d="M.583,7S2.917,2.333,7,2.333,13.417,7,13.417,7,11.083,11.667,7,11.667.583,7,.583,7Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M8.75,7A1.75,1.75,0,1,1,7,5.25,1.75,1.75,0,0,1,8.75,7Z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 11.667 11.667" class="svg-2">
                                                        <path class="a"
                                                            d="M12.828,2.333a1.165,1.165,0,0,0-1.161-1.167H2.333A1.17,1.17,0,0,0,1.167,2.333v7A1.17,1.17,0,0,0,2.333,10.5H10.5l2.333,2.333-.006-10.5ZM10.5,8.167h-7V7h7Zm0-1.75h-7V5.25h7V6.417Zm0-1.75h-7V3.5h7V4.667Z"
                                                            transform="translate(-1.167 -1.167)"></path>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 10 14"
                                                        class="svg-1 svg-3">
                                                        <g transform="translate(-1.167 -0.583)">
                                                            <path class="a"
                                                                d="M12.25,2.917a1.75,1.75,0,1,1-1.75-1.75,1.75,1.75,0,0,1,1.75,1.75Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M5.25,7A1.75,1.75,0,1,1,3.5,5.25,1.75,1.75,0,0,1,5.25,7Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M12.25,11.083a1.75,1.75,0,1,1-1.75-1.75A1.75,1.75,0,0,1,12.25,11.083Z">
                                                            </path>
                                                            <path class="a" d="M5.011,7.881,8.995,10.2">
                                                            </path>
                                                            <path class="a" d="M8.989,3.8,5.011,6.119">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <div class="p-time">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                                            <path class="a"
                                                                d="M11,3A3,3,0,1,0,8,6,3,3,0,0,0,11,3ZM7.3,7.534C5.446,6.4,2.443,6.088.931,6A.865.865,0,0,0,0,6.848v6.963a.859.859,0,0,0,.828.845A16.811,16.811,0,0,1,6.86,15.951a.435.435,0,0,0,.64-.371V7.892a.416.416,0,0,0-.2-.358ZM15.069,6c-1.511.086-4.514.4-6.368,1.533a.424.424,0,0,0-.2.363v7.681a.436.436,0,0,0,.642.372,16.817,16.817,0,0,1,6.03-1.294A.86.86,0,0,0,16,13.811V6.848A.865.865,0,0,0,15.069,6Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <p>6 mns</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="l-post d-flex">
                                    <div class="post-img">
                                        <img src="img/l-post/l-post-2.jpg" alt="l-post-img">
                                    </div>
                                    <div class="post-title">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="title">
                                                    <a href="#">10 free best google fonts to make websites more attractive</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="tag">
                                                    <a href="#">Google Font</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="profile">
                                                    <div class="profile-img">
                                                        <img src="img/banner/b-profile-2.png" alt="blog profile">
                                                    </div>
                                                    <p>D. Alaska</p>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 14 10.5" class="svg-1">
                                                        <g transform="translate(0 -1.75)">
                                                            <path class="a"
                                                                d="M.583,7S2.917,2.333,7,2.333,13.417,7,13.417,7,11.083,11.667,7,11.667.583,7,.583,7Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M8.75,7A1.75,1.75,0,1,1,7,5.25,1.75,1.75,0,0,1,8.75,7Z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 11.667 11.667" class="svg-2">
                                                        <path class="a"
                                                            d="M12.828,2.333a1.165,1.165,0,0,0-1.161-1.167H2.333A1.17,1.17,0,0,0,1.167,2.333v7A1.17,1.17,0,0,0,2.333,10.5H10.5l2.333,2.333-.006-10.5ZM10.5,8.167h-7V7h7Zm0-1.75h-7V5.25h7V6.417Zm0-1.75h-7V3.5h7V4.667Z"
                                                            transform="translate(-1.167 -1.167)"></path>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 10 14"
                                                        class="svg-1 svg-3">
                                                        <g transform="translate(-1.167 -0.583)">
                                                            <path class="a"
                                                                d="M12.25,2.917a1.75,1.75,0,1,1-1.75-1.75,1.75,1.75,0,0,1,1.75,1.75Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M5.25,7A1.75,1.75,0,1,1,3.5,5.25,1.75,1.75,0,0,1,5.25,7Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M12.25,11.083a1.75,1.75,0,1,1-1.75-1.75A1.75,1.75,0,0,1,12.25,11.083Z">
                                                            </path>
                                                            <path class="a" d="M5.011,7.881,8.995,10.2">
                                                            </path>
                                                            <path class="a" d="M8.989,3.8,5.011,6.119">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <div class="p-time">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                                            <path class="a"
                                                                d="M11,3A3,3,0,1,0,8,6,3,3,0,0,0,11,3ZM7.3,7.534C5.446,6.4,2.443,6.088.931,6A.865.865,0,0,0,0,6.848v6.963a.859.859,0,0,0,.828.845A16.811,16.811,0,0,1,6.86,15.951a.435.435,0,0,0,.64-.371V7.892a.416.416,0,0,0-.2-.358ZM15.069,6c-1.511.086-4.514.4-6.368,1.533a.424.424,0,0,0-.2.363v7.681a.436.436,0,0,0,.642.372,16.817,16.817,0,0,1,6.03-1.294A.86.86,0,0,0,16,13.811V6.848A.865.865,0,0,0,15.069,6Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <p>6 mns</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="l-post d-flex">
                                    <div class="post-img">
                                        <img src="img/l-post/l-post-3.jpg" alt="l-post-img">
                                    </div>
                                    <div class="post-title">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="title">
                                                    <a href="#">Beauty is our natural song but you can make it better top 10 tips</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="tag">
                                                    <a href="#">Beauty Spa</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="profile">
                                                    <div class="profile-img">
                                                        <img src="img/banner/b-profile-2.png" alt="blog profile">
                                                    </div>
                                                    <p>D. Alaska</p>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 14 10.5" class="svg-1">
                                                        <g transform="translate(0 -1.75)">
                                                            <path class="a"
                                                                d="M.583,7S2.917,2.333,7,2.333,13.417,7,13.417,7,11.083,11.667,7,11.667.583,7,.583,7Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M8.75,7A1.75,1.75,0,1,1,7,5.25,1.75,1.75,0,0,1,8.75,7Z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 11.667 11.667" class="svg-2">
                                                        <path class="a"
                                                            d="M12.828,2.333a1.165,1.165,0,0,0-1.161-1.167H2.333A1.17,1.17,0,0,0,1.167,2.333v7A1.17,1.17,0,0,0,2.333,10.5H10.5l2.333,2.333-.006-10.5ZM10.5,8.167h-7V7h7Zm0-1.75h-7V5.25h7V6.417Zm0-1.75h-7V3.5h7V4.667Z"
                                                            transform="translate(-1.167 -1.167)"></path>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 10 14"
                                                        class="svg-1 svg-3">
                                                        <g transform="translate(-1.167 -0.583)">
                                                            <path class="a"
                                                                d="M12.25,2.917a1.75,1.75,0,1,1-1.75-1.75,1.75,1.75,0,0,1,1.75,1.75Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M5.25,7A1.75,1.75,0,1,1,3.5,5.25,1.75,1.75,0,0,1,5.25,7Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M12.25,11.083a1.75,1.75,0,1,1-1.75-1.75A1.75,1.75,0,0,1,12.25,11.083Z">
                                                            </path>
                                                            <path class="a" d="M5.011,7.881,8.995,10.2">
                                                            </path>
                                                            <path class="a" d="M8.989,3.8,5.011,6.119">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <div class="p-time">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                                            <path class="a"
                                                                d="M11,3A3,3,0,1,0,8,6,3,3,0,0,0,11,3ZM7.3,7.534C5.446,6.4,2.443,6.088.931,6A.865.865,0,0,0,0,6.848v6.963a.859.859,0,0,0,.828.845A16.811,16.811,0,0,1,6.86,15.951a.435.435,0,0,0,.64-.371V7.892a.416.416,0,0,0-.2-.358ZM15.069,6c-1.511.086-4.514.4-6.368,1.533a.424.424,0,0,0-.2.363v7.681a.436.436,0,0,0,.642.372,16.817,16.817,0,0,1,6.03-1.294A.86.86,0,0,0,16,13.811V6.848A.865.865,0,0,0,15.069,6Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <p>6 mns</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="l-post d-flex">
                                    <div class="post-img">
                                        <img src="img/l-post/l-post-4.jpg" alt="l-post-img">
                                    </div>
                                    <div class="post-title">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="title">
                                                    <a href="#">Love gives us the gift of some beautiful days and moments</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="tag">
                                                    <a href="#">Lifestyle</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="profile">
                                                    <div class="profile-img">
                                                        <img src="img/banner/b-profile-2.png" alt="blog profile">
                                                    </div>
                                                    <p>D. Alaska</p>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 14 10.5" class="svg-1">
                                                        <g transform="translate(0 -1.75)">
                                                            <path class="a"
                                                                d="M.583,7S2.917,2.333,7,2.333,13.417,7,13.417,7,11.083,11.667,7,11.667.583,7,.583,7Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M8.75,7A1.75,1.75,0,1,1,7,5.25,1.75,1.75,0,0,1,8.75,7Z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 11.667 11.667" class="svg-2">
                                                        <path class="a"
                                                            d="M12.828,2.333a1.165,1.165,0,0,0-1.161-1.167H2.333A1.17,1.17,0,0,0,1.167,2.333v7A1.17,1.17,0,0,0,2.333,10.5H10.5l2.333,2.333-.006-10.5ZM10.5,8.167h-7V7h7Zm0-1.75h-7V5.25h7V6.417Zm0-1.75h-7V3.5h7V4.667Z"
                                                            transform="translate(-1.167 -1.167)"></path>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 10 14"
                                                        class="svg-1 svg-3">
                                                        <g transform="translate(-1.167 -0.583)">
                                                            <path class="a"
                                                                d="M12.25,2.917a1.75,1.75,0,1,1-1.75-1.75,1.75,1.75,0,0,1,1.75,1.75Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M5.25,7A1.75,1.75,0,1,1,3.5,5.25,1.75,1.75,0,0,1,5.25,7Z">
                                                            </path>
                                                            <path class="a"
                                                                d="M12.25,11.083a1.75,1.75,0,1,1-1.75-1.75A1.75,1.75,0,0,1,12.25,11.083Z">
                                                            </path>
                                                            <path class="a" d="M5.011,7.881,8.995,10.2">
                                                            </path>
                                                            <path class="a" d="M8.989,3.8,5.011,6.119">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <p>965</p>
                                            </li>
                                            <li>
                                                <div class="p-time">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                                                            <path class="a"
                                                                d="M11,3A3,3,0,1,0,8,6,3,3,0,0,0,11,3ZM7.3,7.534C5.446,6.4,2.443,6.088.931,6A.865.865,0,0,0,0,6.848v6.963a.859.859,0,0,0,.828.845A16.811,16.811,0,0,1,6.86,15.951a.435.435,0,0,0,.64-.371V7.892a.416.416,0,0,0-.2-.358ZM15.069,6c-1.511.086-4.514.4-6.368,1.533a.424.424,0,0,0-.2.363v7.681a.436.436,0,0,0,.642.372,16.817,16.817,0,0,1,6.03-1.294A.86.86,0,0,0,16,13.811V6.848A.865.865,0,0,0,15.069,6Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <p>6 mns</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="w-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="post-img">
                                    <img src="img/w-post/w-post-1.jpg" alt="w-post">
                                </div>
                                <div class="post-title">
                                    <p>Black Dream</p>
                                    <div class="title">
                                        <a href="#">Colorful dreams should be seen by everyone but not like paper</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="post-img">
                                    <img src="img/w-post/w-post-2.jpg" alt="w-post">
                                </div>
                                <div class="post-title">
                                    <p>River Drive</p>
                                    <div class="title">
                                        <a href="#">Our life goes on like a wave of a river with a wonderful feeling</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="post-img">
                                    <img src="img/w-post/w-post-3.jpg" alt="w-post">
                                </div>
                                <div class="post-title">
                                    <p>Lifestyle</p>
                                    <div class="title">
                                        <a href="#">Every time people have to fight and live, This is human life</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Post End -->
    <!-- Pagination Start -->
    <section class="pagination">
        <div class="container">
            <ul>
                <li><a href="#">Prev</a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </section>
    <!-- Pagination End -->
    <!-- BG Content V2 Start -->
    <section class="bg-content banner-bg v2" data-background="img/bg/bg-3.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-4">
                    <div class="title">
                        <h5>Subscribe Our Newsletter</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <form action="#">
                        <input type="email" placeholder="Email address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="s-icon">
                        <ul>
                            <li class="db"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="fb">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="gp">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                                        <path
                                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="tw">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="vimeo">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M447.8 153.6c-2 43.6-32.4 103.3-91.4 179.1-60.9 79.2-112.4 118.8-154.6 118.8-26.1 0-48.2-24.1-66.3-72.3C100.3 250 85.3 174.3 56.2 174.3c-3.4 0-15.1 7.1-35.2 21.1L0 168.2c51.6-45.3 100.9-95.7 131.8-98.5 34.9-3.4 56.3 20.5 64.4 71.5 28.7 181.5 41.4 208.9 93.6 126.7 18.7-29.6 28.8-52.1 30.2-67.6 4.8-45.9-35.8-42.8-63.3-31 22-72.1 64.1-107.1 126.2-105.1 45.8 1.2 67.5 31.1 64.9 89.4z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BG Content V2 End -->
@endsection
