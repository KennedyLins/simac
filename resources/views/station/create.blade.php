@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

<div class="container">

@if(session('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          {{ session('status') }}
      </div>
@endif


     <div class="container" align="center">

    <form class="well form-horizontal" action="./saveStation" method="get"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Adicionar Nova Estação</b></h2></center></legend><br>



<div class="form-group">
  <label class="col-md-4 control-label">Nome da Estação</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nameStation" placeholder="Nome da Estação" class="form-control"  type="text">
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" >Cód. da Estação</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="idStation" placeholder="Cód. da Estação" class="form-control"  type="text">
    </div>
  </div>
</div>

 <!--

  <div class="form-group"> 
  <label class="col-md-4 control-label">Rio</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="department" class="form-control selectpicker">
      <option value="">Select your Department/Office</option>
      <option>Department of Engineering</option>
      <option>Department of Agriculture</option>
      <option >Accounting Office</option>
      <option >Tresurer's Office</option>
      <option >MPDC</option>
      <option >MCTC</option>
      <option >MCR</option>
      <option >Mayor's Office</option>
      <option >Tourism Office</option>
    </select>
  </div>
</div>
</div>
  
-->

<div class="form-group">
  <label class="col-md-4 control-label">Rio</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="river" placeholder="Rio" class="form-control"  type="text">
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" >Defina o nível de pré-alerta (cm)</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="preAlertLevel" placeholder="nível de pré-alerta (cm)" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Defina o nível de alerta (cm)</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="alertLevel" placeholder="nível de alerta (cm)" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Defina o nível de inundação (cm)</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="floodLevel" placeholder="nível de inundação (cm)" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="(639)" class="form-control" type="text">
    </div>
  </div>
</div>

-->


<!-- Select Basic -->

<!-- Success message 
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

-->


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCADASTRAR <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>

</div>
    </div><!-- /.container -->

 </div>   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
    <script> console.log('Hi!'); 
    $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
			 user_name: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
                    }
                }
            },
			 user_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
			confirm_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please confirm your Password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            contact_no: {
                validators: {
                  stringLength: {
                        min: 12, 
                        max: 12,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
			 department: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Department/Office'
                    }
                }
            },
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

</script>    
@stop