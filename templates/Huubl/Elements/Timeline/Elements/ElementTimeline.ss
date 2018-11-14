<%--<div class="element_content__content <% if $Style %>element_content__$ExtraClass<% end_if %>">--%>
    <%--<% if $ShowTitle %><h3>$Title</h3><% end_if %>--%>

    <%--<% if $Panels %>--%>
        <%--<div id="Timeline-{$ID}" class="Timeline" role="tablist">--%>
            <%--<% loop $Panels %>--%>
                <%--<h3>$Title</h3>--%>
                <%--<div>--%>
                    <%--<% if $Image %>--%>
                        <%--<img src="$Image.URL" class="img-responsive" alt="$Title.ATT">--%>
                    <%--<% end_if %>--%>
                    <%--$Content--%>
                    <%--<% if $ElementLink %>$ElementLink<% end_if %>--%>
                <%--</div>--%>
            <%--<% end_loop %>--%>
        <%--</div>--%>
    <%--<% end_if %>--%>
<%--</div>--%>

<div class="section bg-light aos-init aos-animate" data-aos="fade-up">




    <div class="container mb-5 <% if $Style %>element_content__$ExtraClass<% end_if %>">
        <div class="row section-heading justify-content-center">
            <div class="col-md-8 text-center">
                <% if $ShowTitle %><h2 class="heading">$Title</h2><% end_if %>
                <% if $Content %>$Content<% end_if %>
            </div>
        </div>
    </div>

<% if $Panels %>
    <div class="container py-2" id="Timeline-{$ID}">

    <% loop $Panels %>

        <div class="row no-gutters">
        <% if $First %>

                    <div class="col-sm"><!-- spacer--></div><!-- timeline item 1 center dot-->
                    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col"><span>&nbsp;</span></div>
                            <div class="col"><span>&nbsp;</span></div>
                        </div>
                        <h5 class="m-2"><span class="badge badge-pill bg-light border">&nbsp;</span></h5>
                        <div class="row h-50">
                            <div class="col border-right"><span>&nbsp;</span></div>
                            <div class="col"><span>&nbsp;</span></div>
                        </div>
                    </div><!-- timeline item 1 event content-->
                    <div class="col-sm py-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right text-muted small"></div>
                                <p class="font-weight-bold card-title">$Title</p>
                                <div class="card-text">$Content</div>
                            </div>
                        </div>
                    </div>

        <% end_if %>

        <% if $middle %>

            <% if $Odd %>


                        <div class="col-sm"><!-- spacer--></div>
                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col border-right"><span>&nbsp;</span></div>
                                <div class="col"><span>&nbsp;</span></div>
                            </div>
                            <h5 class="m-2"><span class="badge badge-pill bg-light border">&nbsp;</span></h5>
                            <div class="row h-50">
                                <div class="col border-right"><span></span></div>
                                <div class="col"><span></span></div>
                            </div>
                        </div>
                        <div class="col-sm py-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right text-muted small"></div>
                                    <p class="font-weight-bold card-title">$Title</p>
                                    <div class="card-text">$Content</div>

                                </div>
                            </div>
                        </div>



            <% end_if %>

            <% if $Even %>

                        <div class="col-sm py-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right text-muted small"></div>
                                    <p class="font-weight-bold card-title">$Title</p>
                                    <div class="card-text">$Content</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col border-right"><span>&nbsp;</span></div>
                                <div class="col"><span>&nbsp;</span></div>
                            </div>
                            <h5 class="m-2"><span class="badge badge-pill bg-light border">&nbsp;</span></h5>
                            <div class="row h-50">
                                <div class="col border-right"><span>&nbsp;</span></div>
                                <div class="col"><span>&nbsp;</span></div>
                            </div>
                        </div>
                        <div class="col-sm"><!-- spacer--></div>


            <% end_if %>


        <% end_if %>

        <% if $last %>
                <!-- timeline item 3-->

                    <div class="col-sm py-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right text-muted small"></div>
                                <p class="font-weight-bold card-title">$Title</p>
                                <div class="card-text">$Content</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col border-right"><span></span></div>
                            <div class="col"><span></span></div>
                        </div>
                        <h5 class="m-2"><span class="badge badge-pill bg-light border">&nbsp;</span></h5>
                        <div class="row h-50">
                            <div class="col"><span></span></div>
                            <div class="col"><span></span></div>
                        </div>
                    </div>
                    <div class="col-sm"><!-- spacer--></div>

        <% end_if %>
        </div><!-- /row-->
    <% end_loop %>
    </div>
<% end_if %>



</div>
