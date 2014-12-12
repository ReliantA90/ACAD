$(document).ready(function() {
  
    $('#demo').bootstrapValidator({
               group: 'td',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 50,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    }
                }
            },
            

            fat_name: {
               message: 'The father name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The father name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 50,
                        message: 'The father name must be more than 6 and less than 30 characters long'
                    }
                }
            },
            
            mot_name: {
                message: 'The mother name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The mother name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 50,
                        message: 'The mother name must be more than 6 and less than 30 characters long'
                    }
                }
            },
              date: {
                validators: {
                    notEmpty: {
                        message: 'Date_of_Birth cannot be empty'
                    },
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The value is not a valid date'
                    }
                }
            },
             phone: {
               validators: {
                    notEmpty: {
                        message: 'The phone number is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^[7-9]{1,1}[0-9]{9,9}$/,
                        message: ''
                    }
                }
            },
             email: {
                    validators: { 
                        notEmpty:{
                            message:'The mail is is required and cant not be empty'
                        },

                        emailAddress: {
        
                            message: 'The value is not a valid email address'
                        
                        }
                    }
                       
                },

             designation: {
                validators: {
                    notEmpty: {
                        message: 'designation is required'
                    }
                       
                }
            },
             p_address: {
                validators: {
                    notEmpty: {
                        message: 'permanent address is required'
                    }
                }
            },
             
        }
    });
});