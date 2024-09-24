@extends('layouts.user')
@section('content')
    <script>
        const menu3 = "settings";
        if (document.getElementById(menu3)) {
            document.getElementById(menu3).classList.add("act");
        }
    </script>

    <div class="page-right">
        <div class="content-block">
            <h4 class="main_color mb-3">Profile Details</h4>
            <div class="block-d">
                <form action="https://mashash.com/profile/update" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="hSKmz6UzIqOFmsAs6Rceh3fIv5kFPn2CzEisGaPV" />
                    <input type="file" name="image" id="imageUpload" class="upload" accept=".png, .jpg, .jpeg"
                        hidden="" />
                    <div class="row" style="row-gap: 20px">
                        <div class="col-12">
                            <label for="imageUpload" style="width: auto">
                                <div class="in_single-settings-box profile-details-box top-flashlight light-xl leftside overflow-hidden av_box"
                                    style="
                                    border-radius: 29px;
                                    padding: 5px;
                                    position: relative;
                                ">
                                    <div class="icon_self">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                            viewBox="0 0 13 13" fill="none">
                                            <path
                                                d="M1.62533 11.9166C1.32741 11.9166 1.07228 11.8104 0.859951 11.5981C0.647618 11.3858 0.541632 11.1308 0.541993 10.8333V4.33325C0.541993 4.03534 0.64816 3.78021 0.860493 3.56788C1.07283 3.35554 1.32777 3.24956 1.62533 3.24992H3.33158L4.33366 2.16659H7.58366V4.33325H9.20866V5.95825H11.3753V10.8333C11.3753 11.1312 11.2692 11.3863 11.0568 11.5986C10.8445 11.811 10.5895 11.9169 10.292 11.9166H1.62533ZM5.95866 10.0208C6.63574 10.0208 7.21135 9.78368 7.68549 9.30954C8.15963 8.8354 8.39652 8.25997 8.39616 7.58325C8.39616 6.90617 8.15909 6.33056 7.68495 5.85642C7.21081 5.38228 6.63538 5.14539 5.95866 5.14575C5.28158 5.14575 4.70597 5.38282 4.23183 5.85696C3.75769 6.3311 3.5208 6.90653 3.52116 7.58325C3.52116 8.26033 3.75823 8.83595 4.23237 9.31008C4.70651 9.78422 5.28194 10.0211 5.95866 10.0208ZM5.95866 8.93742C5.57949 8.93742 5.25901 8.80652 4.9972 8.54471C4.7354 8.2829 4.60449 7.96242 4.60449 7.58325C4.60449 7.20408 4.7354 6.8836 4.9972 6.62179C5.25901 6.35999 5.57949 6.22908 5.95866 6.22908C6.33783 6.22908 6.65831 6.35999 6.92012 6.62179C7.18192 6.8836 7.31283 7.20408 7.31283 7.58325C7.31283 7.96242 7.18192 8.2829 6.92012 8.54471C6.65831 8.80652 6.33783 8.93742 5.95866 8.93742ZM10.292 4.33325V3.24992H9.20866V2.16659H10.292V1.08325H11.3753V2.16659H12.4587V3.24992H11.3753V4.33325H10.292Z"
                                                fill="#ABAAB5" />
                                        </svg>
                                    </div>
                                    <img src="https://mashash.com/asset/img/user/avatar/logo.png" class="in_box"
                                        id="preview" />
                                </div>
                            </label>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-c w-100" value="charlielogan520@gmail.com"
                                    required />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" readonly value="charlielogan520@gmail.com" class="form-c w-100"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <button class="template-btn btn-style-three mt-4 w-100 d-flex justify-content-center"
                            style="max-width: 200px">
                            <span class="btn-wrap">
                                <span class="text-one">Submit</span>
                                <span class="text-two">Submit</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
