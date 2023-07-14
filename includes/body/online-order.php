<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="online-order h-100">
        <div class="" id="input_box">
            <div class="container row d-flex justify-content-center align-items-center flex-column mx-auto mx-5 p-5 w-75">
                <form>
                <h3 class="order-heading text-center text-warning pt-5 fs-2"> Online Food Delivery Form </h3><br>
                    <div class="form-group col-12 p-2">
                        <input type="text" class="form-control" name="Customer_Name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group col-12 p-2">
                        <textarea type="text" class="form-control" name="Customer_Address" placeholder="Enter your Address"></textarea>
                    </div>
                    <div class="row p-0 m-0 py-2">
                        <div class="form-group col flex-grow">
                            <select class="form-control" id="food_item" onchange="finalCost()">
                                <option value="0"> Select Food Item ... </option>
                                <option value="1"> Spring Roll </option>
                                <option value="2"> Fried Prawn </option>
                                <option value="3"> Thai Fried Chicken Wings </option>
                                <option value="4"> Cutlet Chicken </option>
                                <option value="5"> Cutlet Beef </option>
                                <option value="6"> Thai Mixed Noodles </option>
                                <option value="7"> Thai Beef With Ginger </option>
                            </select>
                        </div>
                        <div class="form-group col flex-grow">
                            <input type="number" class="form-control" id="food_quantity" placeholder="Quantity" onkeyup="finalCost()">
                        </div>
                    </div>
                    <div class="row p-0 m-0 py-2">
                        <div class="form-group col">
                            <select class="form-control" id="special_item" onchange="finalCost()">
                                <option value="0"> Want Special Item ?</option>
                                <option value="2"> Yes </option>
                                <option value="0"> No </option>
                            </select>
                        </div>

                        <div class="form-group col">
                            <select class="form-control" id="delivery_type" onchange="finalCost()">
                                <option value="0"> Delivery Type - </option>
                                <option value="0"> Normal </option>
                                <option value="2"> Emergency </option>
                            </select>
                        </div><br>
                    </div>
                    <div class="form-group col p-2">
                        <div class="row">
                            <div class="col-8 mx-auto">
                                <label class="col-6 mx-auto fs-5 fw-bold text-danger">Total Cost : </label>
                                <output id="result" class="col-4 fs-5 mx-auto text-bg-success text-center px-5 rounded py-2">0</output>
                            </div>
                            <input type="button" value="Place Order" class="btn btn-warning col-6 mx-auto my-4 fw-bold fs-6 py-3" id="ok" onclick="ok_result()">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="mx-auto d-flex justify-content-center align-items-center">
            <div class="alert alert-success alert-dismissible w-75 text-right mx-auto" style="display: none;" id="okResult">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong class="fs-3 fw-bold">Success!</strong>
                <p class="text-dark"> Your order is successfully submitted. Please keep patience, we will
                    come to you soon.<span> -- Thank You -- </span></p>
                <a type="button" class="btn btn-secondary" href="">Order again</a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="alert">Close</button>
            </div>
        </div>
    </div>
    <script>
        function finalCost() {
            var foodItem = document.getElementById("food_item").value;
            var specialItemm = document.getElementById("special_item").value;
            var foodQuatity = document.getElementById("food_quantity").value;
            var deliveryType = document.getElementById("delivery_type").value;

            var all_food = (parseInt(foodItem) * 7) + (parseInt(specialItemm) * 3) + ((foodQuatity) * 2) + (parseInt(deliveryType) * 4)
            document.getElementById("result").innerHTML = all_food;
        }

        function ok_result() {
            document.getElementById("okResult").style.display = "block";
            document.getElementById("input_box").style.display = "none";
        }
    </script>
</body>

</html>