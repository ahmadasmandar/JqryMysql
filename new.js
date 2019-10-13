$("button").on("click", function () {
            let name = $("input#name").val()
            if ($.trim(name) != '') {
                $.post('index.php', {
                        name: name
                    }, function (data) {
                        if(data!=''){
                            $("#data1").text(name+" "+data).css("color","green");
                        }
                        else
                        {
                            $("#data1").text("Name not found").css("color","red");
                            // $("#data1").css("color","red");
                        }
                        
                    });

                }
            })