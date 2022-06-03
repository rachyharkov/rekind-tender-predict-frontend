$(document).ready(function() {
    
    // after 3 seconds, $('.loader img').addClass('.loader-img-scaled-down'), then 300ms later, $('.loader').fadeOut('slow');
    setTimeout(function() {
        $('.loader img.loader-gif').addClass('loader-img-scaled-down');
    }, 3000);
    setTimeout(function() {
        $('.loader').fadeOut('slow');

        $('.should-be-animated').addClass('animate-slide-down-fade-in');
    }, 3400);

    setTimeout(function() {
        $('.should-be-animated-pop-out').addClass('animate-pop-out');
    }, 4000)




    
    $(document).on('input','.rs-range', function() {    
        var arrayalgorithm = ['Moderate', 'Medium','Optimis'];
        var thisel = $(this)
        var bulletPosition = (this.value /this.max);
        thisel.prev('.rs-label').html(arrayalgorithm[thisel.val()]).css('left',((bulletPosition * 90) - 10) + "px")
    })

    $(document).on('click', '#btn_file_upload', function(e) {
        e.preventDefault()
        $('#file_upload').click();
    })

    $(document).on('change', '#file_upload', function() {

        // if is not selected or is empty, return
        if ($(this).val() == '') {
            $('#btn_file_upload').html('Klik disini untuk Pilih File');
            return;
        }

        if($(this).val() != '') {
            var file = $(this).val();

            // get file name with extension
            var fileName = file.split('\\').pop();
        
            $('#btn_file_upload').html(fileName).css('border', 'none');
        }
    })

    $(document).on('change', '.rs-range', function() {

        var arrcek = []

        $('.rs-range').each(function() {
            arrcek.push($(this).val())
        })

        // check if arr cek all value is 0
        if(arrcek.every(function(item) { return item === '0' })) {
            $('#title-input-x').text('Input Behavior (Default)')
        } else {
            $('#title-input-x').text('Input Behavior')
        }
    })

    $(document).on('submit', '#form-upload-data', function(e) {
        e.preventDefault();

        // get submit button element
        var submitBtn = $(this).find('button[type="submit"]');

        // if form is empty, return alert
        if ($(this).find('input[type="file"]').val() == '') {
            $('#btn_file_upload').html('<i class="fas fa-file-upload" style="margin: 0 10px;color: #5c5b5b;font-size: 17px;"></i> Wajib pilih file data, Klik disini').css('border', '1px solid red');
                
            return;
        }


        // get form data and serialize it
        var formData = new FormData();
        // append file to form data
        formData.append('input_file', $('#file_upload')[0].files[0]);

        var arrayCheckedAlgorithm = []

        // append checked checkbox name=checkboxalgorithm[] value of this form to form data
        $(this).find('input.checkboxalgorithm:checked').each(function() {
            arrayCheckedAlgorithm.push($(this).val());
        })

        // append slide value to form data
        formData.append('harga', $(this).find('input[name="harga"]').val());
        formData.append('partner', $(this).find('input[name="partner"]').val());
        formData.append('competitor', $(this).find('input[name="competitor"]').val());

        formData.append('checkboxalgorithm', arrayCheckedAlgorithm);

        console.log(formData.get('checkboxalgorithm'));

        $('.section-2-wrapper').css('width', '30%');
        $('.section-2-info-detail-side').css('width', '70%');

        $('.section-2-text-title > h3').text('Memproses')
        $('.section-2-text-description > p').text('Mohon tunggu...');

        submitBtn.html('<i class="fas fa-spinner fa-spin"></i>');

        $('.section-2-info-detail-side').html('<div style="display: flex;justify-content: center;align-items: center;min-height: 100%; margin: 0;"><div class="clock-loader"></div></div>');

        $.ajax({
            url: 'http://127.0.0.1:5000/test',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                
                $('.section-2-text-title > h3').text('Result')
                $('.section-2-text-description > p').text('Berhasil memproses data');
                
                if(data.length > 1) {

                    var str = `
                    <div style="display: flex;justify-content: space-evenly; flex-direction: column;align-items: center;min-height: 100%; margin: 0;">
                        <div>
                            <i class="fas fa-file-invoice" style="font-size: 80px;background: linear-gradient(132deg, rgba(222,85,255,1) 0%, rgba(131,79,245,1) 100%);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                            margin: 10px;"></i>
                            <h3>Evaluation Result</h3>
                            <p>X dengan input harga(${data.x_input[0]}), partner(${data.x_input[1]}), dan competitor(${data.x_input[2]})</p>
                        </div>    
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;">Algorithm</th>
                                        <th colspan="2">Prob.</th>
                                        <th colspan="2" rowspan="2" style="vertical-align: middle;">Evaluasi</th>
                                    </tr>
                                    <tr>
                                        <th>Win</th>
                                        <th>Lose</th>
                                    </tr>
                                </thead>
                                <tbody>

                            `
                        var lengthny = data.length

                        for(var i = 0; i < lengthny; i++) {

                            var icon = ''

                            if(data.results[i].evaluation == 'Lose') {
                                icon = '<i class="fas fa-times" style="color: red;font-size: 14px;"></i>'
                            } else {
                                icon = '<i class="fas fa-check" style="color: green;font-size: 14px;"></i>'
                            }

                            str+= `<tr>
                                        <td style="display: flex;justify-content: space-between">${data.results[i].algorithm_name}<button data-title="${data.results[i].message}" class="btn btn-danger btn-sm btn-status-status tooltip-cust fade" style="font-size: 10px;height: 18px;width: 18px; z-index:${(lengthny - i)}" onclick="return false;"><i class="fas fa-question" style="position: absolute;top: 4px;left: 4px;"></i></button></td><td><span class="text-success">${data.results[i].probability.win}</span></td><td><span class="text-danger">${data.results[i].probability.lose}</span></td><td>${icon}</td><td>${data.results[i].evaluation}</td>
                                    </tr>`
                        }

                    str += `    </tbody>
                            </table>
                        </div>
                    </div>
                    `
                    $('.section-2-info-detail-side').html(str)                
                } else {

                    var icon = ''

                    if(data.results.evaluation == 'Lose') {
                        icon = '<i class="fas fa-times" style="color: red; font-size: 80px;"></i>'
                    } else {
                        icon = '<i class="fas fa-check-circle" style="color: green; font-size: 80px;"></i>'
                    }

                    $('.section-2-info-detail-side').html(`<div style="display: flex;justify-content: space-evenly; flex-direction: column;align-items: center;min-height: 100%; margin: 0;">
                        <h3>Evaluation Result</h3>
                        <div>
                            ${icon}
                            <p class="m-0" style="font-size: 14px; font-weight: bold;">${data.results.evaluation}</p>
                            <p style="font-size: 10px;">Prediction Probability: <span class="text-success">${data.results.probability.win}</span> | <span class="text-danger">${data.results.probability.lose}</span></p>
                            <span class="badge rounded-pill bg-primary">${data.algorithm_used}</span>
                        </div>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <span class="bi flex-shrink-0 me-2">
                                <i class="fas fa-microchip"></i>    
                            </span>
                            <div>
                                ${data.results.message}
                            </div>
                        </div>
                    </div>`);
                }

                submitBtn.html('Submit');
            },
            error: function(data) {
                alert('Service unavailable, please try again later');
                $('.section-2-info-detail-side').html(`<div style="display: flex;justify-content: center;align-items: center;min-height: 100%; margin: 0;">
                    <p>Service unavailable, please try again later</p>
                </div>`);
                submitBtn.html('Submit');
                $('.section-2-text-title > h3').text('Result')
                $('.section-2-text-description > p').text('Failed to process data');
            }
            
        })
    })
})