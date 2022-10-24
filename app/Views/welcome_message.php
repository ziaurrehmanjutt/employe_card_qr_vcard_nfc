<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/jquery-ui/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select-color-palettes/style/1kolorpicker.css') ?>">

    <style>
        .draggable {
            width: 150px;
            height: 150px;
            padding: 0.5em;
            border: 1px solid black;
        }
    </style>

</head>

<body>

    <div class="container">



        <div>
            <div id="main_div_card" style="width: 600px;height:600px;border:1px solid black;margin:10px auto;background:#f1f1f1;position: relative;">


                <div onclick="elmClick(this)" class="draggable">
                    <p>Drag me around</p>
                </div>


            </div>
        </div>





        <div style="position: fixed;width: 200px;top: 10px;left: 10px;background: #9e9e9e1f;">


            <div class="row">
                <div class="col-6">
                    Height
                </div>

                <div class="col-6">
                    <div id="controlgroup">
                        <button onclick="changeMain(1)"><span class="ui-icon ui-icon-plus"></span></button>
                        <button onclick="changeMain(2)"> <span class="ui-icon ui-icon-minus"></span></button>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    Width
                </div>

                <div class="col-6">
                    <div id="controlgroup">
                        <button onclick="changeMain(3)"> <span class="ui-icon ui-icon-plus"></span></button>
                        <button onclick="changeMain(4)"><span class="ui-icon ui-icon-minus"></span></button>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    Background
                </div>

                <div class="col-6">
                    <input id="main_background" onchange="setBackground()" type="text" value="#FFFFFF" class="kolorPicker">
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <button onclick="capture()" class="btn btn-primary">Capture</button>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button onclick="addElm()" class="btn btn-primary">Add Element</button>
                </div>
            </div>







        </div>


        <div style="position: fixed;width: 200px;top: 10px;right: 10px;background: #9e9e9e1f;">
            <table class="table">
                <tr>
                    <td>
                        <button onclick="addElm(1)" class="btn btn-sm">
                            Text
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-sm">
                            Image
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <button class="btn btn-sm">
                            Line
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-sm">
                            Square
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <button class="btn btn-sm">
                            Circle
                        </button>
                    </td>
                    <td>
                       
                    </td>
                </tr>
            </table>
        </div>

    </div>



</body>

<script src="<?= base_url('assets/plugins/jquery-ui/external/jquery/jquery.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.js') ?>"></script>
<script src="<?= base_url('assets/plugins/htmlCanvas/html2canvas.js') ?>"></script>
<script src="<?= base_url('assets/plugins/select-color-palettes/jquery.kolorpicker.js') ?>"></script>

<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    var pageSettings = {
        mainDiv: {
            height: 600,
            width: 600
        }
    }


    var allElements = [];
    var element = {
        elmType: 0,
        elmID: "",
        elmSize: {
            heigh: 50,
            width: 50
        },
        elmStyle: {
            background: "",
            border_color: "black",
            border_size: "1",
            border_style: "solid",
            z_index: 1,
            border_radius: 1,
            padding: 3,
            text_align: "center"
        },
        elmText: {
            font_size:12,
            font_color:"black",
            font_weight: 100,
            font_used: "default",
        },
        elmProps: {
            emlText: "",
            elmImage: "",
        },
        elmPosition: {
            top: 10,
            left: 10
        }
    }
    var selectedElm = null;

    function changeMain(type) {
        let w = $('#main_div_card').width();
        let h = $('#main_div_card').height();
        if (type == 1) {
            if (h < 590) {
                $('#main_div_card').height(h + 10);
                pageSettings.mainDiv.height = h + 10;
            }
        } else if (type == 2) {
            if (h > 110) {
                $('#main_div_card').height(h - 10);
                pageSettings.mainDiv.height = h - 10;
            }
        } else if (type == 3) {
            if (w < 590) {
                $('#main_div_card').width(w + 10);
                pageSettings.mainDiv.width = w + 10;
            }
        } else if (type == 4) {
            if (w > 110) {
                $('#main_div_card').width(w - 10);
                pageSettings.mainDiv.width = w - 10;
            }
        }
    }

    function addElm(type) {
        console.log(type);
        let r = (Math.random() + 1).toString(36).substring(7);
        let newElement = element;
        newElement.elmID = r;
        let elm;
        if(type == 1){
            newElement.elmType = 1;
            elm = ` <div id="${r}" onclick="elmClick(this)" class="draggable" style="height: 100px;width: 100px;border: 1px solid black;padding: 3px;text-align: center;position:absolute">
                            <span></span>
                        </div>`;
        }
        console.log(elm);
        $('#main_div_card').append(elm);
        allElements.push(newElement);
        reInitial();
    }

    function capture() {
        html2canvas(document.querySelector("#main_div_card")).then(canvas => {
            document.body.appendChild(canvas)
        });
    }

    function reInitial() {
        $(".draggable").draggable({
            containment: "#main_div_card",
            scroll: false
        });
    }


    function setBackground() {
        $("#main_div_card").css({
            "backgroundColor": $("#main_background").val()
        });
    }
    function elmClick(ev) {
        console.log(ev);
        console.log($(ev).attr('id'));
        selectedElm = ev;
    }
</script>


<script>
    $(function() {
        $(".draggable").draggable({
            containment: "#main_div_card",
            scroll: false
        });
    });
</script>

</html>