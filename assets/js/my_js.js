/** Function */
function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", theUrl, false); // false for synchronous request
    xmlHttp.send(null);
    return xmlHttp.responseText;
}
const messageSend = async (functionName, templateId, mobile) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                template_id: templateId,
                mobile: mobile,
            },
            success: function (dataJson) {
                res = dataJson;
                // if (dataJson) {
                //     Swal.fire('Success!', 'Successfully message send your mobile no.', 'success');
                // }

            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const duplicateMobilenoCheck = async (functionName, mobile) => {
    try {
        //var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                mobile: mobile,
            },
            success: function (dataJson) {
                // res = dataJson;
                if (dataJson > 0) {
                    Swal.fire('error!', 'Mobile no. already exists. Try new one.', 'error');
                }

            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        //return res;
    } catch (err) {
        console.log(err);
    }
}

function getRandomNo(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
const commonAjaxFunction = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

const getCasteData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

const getStateData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const getDistrictData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const getBlockData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const getGpData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const getVillageData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

const userIdValidate =async(id,functionName)=>{
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

const walletAmountCheck=async(amount,functionName)=>{
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                amount:amount,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const messageSendReadAdmin=async(message,functionName)=>{
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                message:message,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const messageSendAdmin=async(message,userId,functionName)=>{
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                message:message,
                userid:userId,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}



const sebServiceData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

const getSubcategoryData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

const getSubSubjectsData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

const getModelData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

//search keywords
const getSearchKeywords = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}

/** Filter section */

//Product
const getFilterCategoryData = async (id, functionName,serviceType) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
                type:serviceType
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const getFilterSubCategoryData = async (id, functionName,serviceType) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
                type:serviceType
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
//resale category
const getFilterBrandData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const getFilterModelData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
//Property
const getFilterPropertyTrnsTypeData = async (id, functionName) => {
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: {
                id: id,
            },
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}




function dataDelete(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {
                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your data has been deleted.❌❌',
                                'success',
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }



        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your data is safe 😊😊',
                'error'
            );
        }
    });

}
/**
 * Active
 * */

function dataActive(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, active it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {

            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) { //console.log(dataJson);
                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            swalWithBootstrapButtons.fire(
                                'Activated!',
                                'Your data has been activated.✅✅',
                                'success',
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        }else if(data.status ==500){
                            Swal.fire('Error!', 'No data Found', 'error');
                        }else{
                            Swal.fire('Error!', 'Oops!. You cannot activate more post. please contact to admin', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }



        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}

/**Inactive */

function dataInactive(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, inactive it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {

        if (result.isConfirmed) {
            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {

                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            swalWithBootstrapButtons.fire(
                                'Inactivated!',
                                'Your data has been inactivated.🛑🛑',
                                'success',
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }



        }
        else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}

/**
 * User Verified by Admin
 * */

function userVerify(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, verify it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {

            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {
                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            //$(`.${id}`).remove();
                            swalWithBootstrapButtons.fire(
                                'Verified!',
                                'Your data has been verified.✅✅',
                                'success',
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 500);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }



        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}


function userGalleryVerify(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, verify it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {

            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {
                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            $(`.${id}`).remove();
                            swalWithBootstrapButtons.fire(
                                'Verified!',
                                'Your data has been verified.✅✅',
                                'success',
                            );
                            setTimeout(() => {
                                //window.location.reload();
                            }, 300000);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }



        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}
function dataGalleryDelete(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {
                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            $(`.${id}`).remove();
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your data has been deleted.❌❌',
                                'success',
                            );
                            setTimeout(() => {
                               // window.location.reload();
                            }, 2000);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            } 

        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your data is safe 😊😊',
                'error'
            );
        }
    });

}

/**User Unverified by Admin  */

function userUnVerify(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, unverify it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {

        if (result.isConfirmed) {
            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {


                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            swalWithBootstrapButtons.fire(
                                'Unverified!',
                                'Your data has been unverified.🛑🛑',
                                'success',
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }  
        }
        else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}

/**
 * User Inactive by Admin
 * */

 function userInactive(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, inactivate it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {

            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {
                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            swalWithBootstrapButtons.fire(
                                'Inactivated!',
                                'Your data has been inactivated.🛑🛑',
                                'success',
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }



        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}
/**
 * User Active by Admin
 * */

 function userActive(id, functionName) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, activate it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {

            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {
                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            swalWithBootstrapButtons.fire(
                                'Activated!',
                                'Your data has been Activated.✅✅',
                                'success',
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }



        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}


/**
 * Post Image Verified
 * */

function userPostVerify(id, functionName, returnUrl) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-2',
            cancelButton: 'btn btn-danger mx-2'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        allowOutsideClick: false,
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, verify it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {

            if (id != '') {
                $.ajax({
                    url: functionName,
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id
                    },
                    success: function (dataJson) {
                        var data = JSON.parse(dataJson);
                        if (data.status == 200) {
                            swalWithBootstrapButtons.fire(
                                'Verified!',
                                'Your post has been verified.✅✅',
                                'success',
                            );

                            setTimeout(() => {
                                window.location.href = returnUrl;
                            }, 2000);
                        } else {
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR.responseText);
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error');
            }



        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}

const matrimoneyDataUpdate = async(data,functionName)=>{
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            data: data,
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}
const matrimoneyDataUpdate2 = async(data,functionName)=>{
    try {
        var res;
        await $.ajax({
            url: functionName,
            method: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function (dataJson) {
                res = dataJson;
            },
            error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        return res;
    } catch (err) {
        console.log(err);
    }
}













