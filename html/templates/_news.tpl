<div class="container">
    <div class="border-bottom border-2">
        <div class="p-1">
            <button class="btn btn-warning text-light" id="example-tab" type="button">
                EXAMPLE
            </button>
            <button class="btn btn-warning text-light" id="top-tab" type="button">
                TOP
            </button>
            <button class="btn btn-warning text-light" id="new-tab" type="button">
                NEW
            </button>
            <button class="btn btn-warning text-light" id="best-tab" type="button">
                BEST
            </button>
        </div>
    </div>
    <div class="container">
        <div class="news-content" id="top-content">
            <h3>Top</h3>
        </div>
        <div class="news-content" id="new-content">
            <h3>New</h3>
        </div>
        <div class="news-content" id="best-content">
            <h3>Best</h3>
        </div>
        <div class="news-content news-content-active" id="example-content">
            <div class="row justify-content-start m-2">
                {foreach $example_data as $data}
                    <div class="card border-white border-5 col-12 col-lg-6 col-xl-4 p-2">
                        <div class="card-body bg-light rounded">
                            <h3 class="card-title">{$data.title}</h3>
                            <div class="d-block">
                                <div class="my-2 text-end">
                                    by <span class="text-warning my-1">{$data.author}</span>
                                    {$data.created_at}
                                </div>
                                <div class="my-2 text-end">
                                    {$data.point} point
                                    <a href="#" class="link-warning">{$data.num_comments}</a> comments
                                </div>
                                <div class="my-2 btn btn-warning link-light"><a href="{$data.url}" class="link-light">Read more</a></div>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>