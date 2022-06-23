var app = angular.module('myApp', [])
app.controller('myController', function($scope, $http) {
    $scope.isLogin = true;
    $scope.btname = 'ADD'
    $scope.insertIntoDB = function() {

        if ($scope.name == null) {
            alert('Enter Name')
            return;
        } else if ($scope.phone == null) {
            alert('Enter Phone')
            return;
        } else if ($scope.status == null) {
            alert('Enter Status')
            return;
        }else if ($scope.mssv == null) {
            alert('Enter Mssv')
            return; 
        }
        else if ($scope.address == null) {
            alert('Enter Address')
            return; 
        }
        else if ($scope.majors == null) {
            alert('Enter Majors')
            return; 
        }
        $http.post('insert.php', {
            'send_name': $scope.name,
            'send_phone': $scope.phone,
            'send_status': $scope.status,
            'send_btnName': $scope.btname,
            'send_id': $scope.id,
            'send_mssv': $scope.mssv,
            'send_address' : $scope.address,
            'send_majors' : $scope.majors,
        }).success(function(data) {
            alert(data);
            $scope.loadTable();
            $scope.name = null;
            $scope.phone = null;
            $scope.status = null;
            $scope.btname = 'ADD'
            $scope.msvv = null;
            $scope.address = null;
            $scope.majors = null;

        })

    }

    // $scope.loadTable = function() {
    //     $http.get('select.php').success(function(data) {
    //         $scope.JSONValues = data;
    //     })
    // }
    // $scope.loadTableUser = function() {
    //     $http.get('selectUser.php').success(function(user) {
    //         $scope.JSONUsers = user;
    //         $scope.email = email;
    //         $scope.password = password;
    //     })
    // }

    $scope.updateDB = function(id, name, phone, status, mssv, address, majors) {
        $scope.id = id;
        $scope.name = name;
        $scope.phone = phone;
        $scope.status = status;
        $scope.mssv = mssv;
        $scope.address = address;
        $scope.majors = majors;
        $scope.btname = 'Update'

    }


    $scope.deleteDB = function(id) {
        $http.post('delete.php').success(function() {
            if (confirm('Are You Sure, You Want to Delete')) {
                $http.post('delete.php', { 'send_id': id }).success(function(data) {

                    $scope.loadTable();
                })
            } else {
                false;
            }
        })
    }   
})































// var app = angular.module('myapp', []);
// app.controller('mycontroller', function($scope, $http) {
//     $scope.btname = 'ADD';

//     $scope.insertIntoDB = function() {


//             if ($scope.name == null) {
//                 alert('insert Name')
//             } else if ($scope.phone == null) {
//                 alert('insert Phone')
//             } else {
//                 $http.post('insert.php', {
//                     'send_name': $scope.name,
//                     'send_phone': $scope.phone,
//                     'send_btnname': $scope.btname,
//                     'send_id': $scope.id
//                 }).success(function(data) {
//                     alert(data);
//                     $scope.name = null;
//                     $scope.phone = null;
//                     $scope.updateTable();
//                     $scope.btname = 'ADD';
//                 })

//             }

//         }
//         // click function ends

//     $scope.updateTable = function() {
//         $http.get('select.php').success(function(data) {
//             $scope.somearray = data;
//         })

//     }


//     $scope.updateData = function(id, name, phone) {
//         $scope.id = id
//         $scope.name = name
//         $scope.phone = phone
//         $scope.btname = 'Update';
//     }


// })