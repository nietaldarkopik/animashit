
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasStartLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasEndLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists,
                etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- 
    <div class="offcanvas offcanvas offcanvas-bottom bg-transparent offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
        aria-labelledby="offcanvasBottomLabel-body bg-transparent">
        <div class="offcanvas-header align-items-center">
            <h5 class="offcanvas-title ff-oswald text-white" id="offcanvasBottomLabel">Our <strong>Gigs</strong></h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body overflow-hidden p-0 bg-transparent">
            <div class="row justify-content-center">
                <div class="col-12 text-center pt-1">
                    <button class="ff-oswald text-white h-5 boxed-white d-inline-block h5" data-bs-dismiss="offcanvas"
                        aria-label="Close">Our <strong>Gigs</strong></button>
                </div>
            </div>
            <div class="row justify-content-center px-5 py-0">
                <div class="col-12 gigs-slick">
                    @foreach ($gigs as $i => $item)
                        @php
                            $thumbnail = App\Models\GigMediaModel::where(function ($query) use ($item) {
                                $query->where('gig_id', $item->id);
                                $query->where('display', 'thumbnail');
                            })->first();

                            if (!isset($thumbnail->id)) {
                                $thumbnail = App\Models\GigMediaModel::where(function ($query) use ($item) {
                                    $query->where('gig_id', $item->id);
                                    $query->where('display', 'upload_image');
                                })->first();
                            }

                        @endphp
                        @if (isset($thumbnail->id))
                            <div class="p-2">
                                <div class="card card-offcanvas-bottom bg-transparent text-center card-gig"
                                    data-gig_id="{{ $item->id }}">
                                    <div class="card-body card-body-img">
                                        <img class="card-img" src="{{ url(htmlspecialchars($thumbnail->media)) }}"
                                            alt="Title">
                                    </div>
                                    <div class="card-body p-1">
                                        <h4 class="card-title my-1 h6 ff-oswald text-white">{{ $item->title }}</h4>
                                        <p class="card-text my-1">Body</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
    --}}

    <!-- Modal Portfolio Detail-->
    <div class="modal fade anime-modal p-0 zindex12" id="modalSubPage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog container-fluid mx-auto modal-sm modal-fullscreen p-0" role="document">
            <div class="modal-content m-0 p-0">
                <div class="modal-body ff-dmsans-regular m-0 p-0">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade anime-modal p-0 zindex11" id="modalPage" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable container-fluid mx-auto modal-sm modal-fullscreen p-0"
            role="document">
            <div class="modal-content m-0 p-0">
                <div class="modal-body ff-dmsans-regular">

                </div>
            </div>
        </div>
    </div>