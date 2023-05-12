function dataDelete(id, functionName){
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
            if(id !=''){
                $.ajax({
                    url:functionName,
                    method:'POST',
                    cache:false,
                    data:{
                        id:id
                    },
                    success:function(dataJson){
                        var data=JSON.parse(dataJson);
                        if(data.status ==200){
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your data has been deleted.❌❌',
                                'success',                                 
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        }else{
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error:function(jqXHR){
                        console.log(jqXHR.responseText);
                    }
                });
            }else{
                Swal.fire('Error!', '', 'error');
            }


            
        }else if( result.dismiss === Swal.DismissReason.cancel ){
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

 function dataActive(id, functionName){
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
            
            if(id !=''){
                $.ajax({
                    url:functionName,
                    method:'POST',
                    cache:false,
                    data:{
                        id:id
                    },
                    success:function(dataJson){
                        var data=JSON.parse(dataJson);
                        if(data.status ==200){
                            swalWithBootstrapButtons.fire(
                                'Activated!',
                                'Your data has been activated.✅✅',
                                'success',                                 
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        }else{
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error:function(jqXHR){
                        console.log(jqXHR.responseText);
                    }
                });
            }else{
                Swal.fire('Error!', '', 'error');
            }
            

            
        }else if( result.dismiss === Swal.DismissReason.cancel ){
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}

/**Inactive */

function dataInactive(id, functionName){
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
            if(id !=''){
                $.ajax({
                    url:functionName,
                    method:'POST',
                    cache:false,
                    data:{
                        id:id
                    },
                    success:function(dataJson){
                        var data=JSON.parse(dataJson);
                        if(data.status ==200){
                            swalWithBootstrapButtons.fire(
                                'Inactivated!',
                                'Your data has been inactivated.🛑🛑',
                                'success',                                 
                            );
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        }else{
                            Swal.fire('Error!', 'No data Found', 'error');
                        }
                    },
                    error:function(jqXHR){
                        console.log(jqXHR.responseText);
                    }
                });
            }else{
                Swal.fire('Error!', '', 'error');
            }


            
        }else if( result.dismiss === Swal.DismissReason.cancel ){
            swalWithBootstrapButtons.fire(
                'Cancelled',
                '',
                'error'
            );
        }
    });

}

const getMaterialData=async (id,functionName)=>{
    try {
        var res;
        await $.ajax({
            url:functionName,
            method:'POST',
            cache:false,
            data:{
                material_location:id
            },
            success: function(dataJson){
                res = dataJson;
            },
            error:function(jqXHR){
                console.log(jqXHR.responseText);
            }
       
        });
        return res;

    }catch(err) {
        console.log(err);
    }
}

const checkDuplicateData=async (id,tim_schid,tim_matlocid,functionName)=>{
    try {
        var res;
        await $.ajax({
            url:functionName,
            method:'POST',
            cache:false,
            data:{
                material_location:id,
                tim_schid:tim_schid,
                tim_matlocid:tim_matlocid
            },
            success: function(dataJson){
                res = dataJson;
            },
            error:function(jqXHR){
                console.log(jqXHR.responseText);
            }
       
        });
        return res;

    }catch(err) {
        console.log(err);
    }
}

const getResolutionData=async (functionName)=>{
    try {
        var res;
        await $.ajax({
            url:functionName,
            method:'GET',
            cache:false,
            data:{},
            success: function(dataJson){
                res = dataJson;
            },
            error:function(jqXHR){
                console.log(jqXHR.responseText);
            }
       
        });
        return res;

    }catch(err) {
        console.log(err);
    }
}

const getMonthlyTicketData= async (functionName)=>{
    try {
        var res;
        await $.ajax({
            url:functionName,
            method:'GET',
            cache:false,
            data:{},
            success: function(dataJson){
                res = dataJson;
            },
            error:function(jqXHR){
                console.log(jqXHR.responseText);
            }
       
        });
        return res;

    }catch(err) {
        console.log(err);
    }
}

const getSchoolName=async (schoolName,baseUrl)=>{
    try {
        var res;
        await $.ajax({
            url:`${baseUrl}CommonModel/get_school_data`,
            method:'POST',
            cache:false,
            data:{
                scm_id:schoolName             
            },
            success: function(dataJson){
                res = dataJson;
            },
            error:function(jqXHR){
                console.log(jqXHR.responseText);
            }
       
        });
        return res;

    }catch(err) {
        console.log(err);
    }
}

const getImageGalleryData=async(type,id,baseUrl)=>{
    try {
        var res;
        await $.ajax({
            url:`${baseUrl}`,
            method:'POST',
            cache:false,
            data:{
                type:type,
                id:id               
            },
            success: function(dataJson){
                res = dataJson;
            },
            error:function(jqXHR){
                console.log(jqXHR.responseText);
            }
       
        });
        return res;

    }catch(err) {
        console.log(err);
    }
}
