<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Black & White</title>

    <style type="text/css">
        body {
            font-size: small;
            line-height: 1.4;
        }

        p {
            margin: 0;
        }

        .performance-facts {
            border: 1px solid black;
            margin: 30px;
            float: left;
            width: 90%;
            padding: 0.5rem;

            table {
                border-collapse: collapse;
            }
        }

        .performance-facts__title {
            font-weight: bold;
            font-size: 2rem;
            margin: 0 0 0.25rem 0;
        }

        .performance-facts__header {
            border-bottom: 1.2px solid black;
            width: 100%;


            p {
                margin: 0;
            }
        }

        .performance-facts__table {
            width: 100%;

            thead tr {

                th,
                td {
                    border: 0;
                }
            }

            th,
            td {
                font-weight: normal;
                text-align: left;
                padding: 0.25rem 0;
                border-top: 1px solid black;
                white-space: nowrap;
            }

            td {
                &:last-child {
                    text-align: right;
                }
            }

            .blank-cell {
                width: 1rem;
                border-top: 0;
            }

            .thick-row {

                th,
                td {
                    border-top-width: 5px;
                }
            }
        }

        .small-info {
            font-size: 0.7rem;
        }

        .performance-facts__table--small {
            @extend .performance-facts__table;
            border-bottom: 1px solid #999;
            margin: 0 0 0.5rem 0;

            thead {
                tr {
                    border-bottom: 1px solid black;
                }
            }

            td {
                &:last-child {
                    text-align: left;
                }
            }

            th,
            td {
                border: 0;
                padding: 0;
            }
        }

        .performance-facts__table--grid {
            @extend .performance-facts__table;
            margin: 0 0 0.5rem 0;

            td {
                &:last-child {
                    text-align: left;

                    &::before {
                        content: "•";
                        font-weight: bold;
                        margin: 0 0.25rem 0 0;
                    }
                }
            }
        }

        .text-center {
            text-align: center;
        }

        .thick-end {
            border-bottom: 10px solid black;
        }

        .thin-end {
            border-bottom: 1px solid black;
        }

        .logo {
            height: 130px;
            width: 130px;
        }

        .logo-img img {
            height: 100px;
            width: 100px;

        }

        .heading-header {
            position: absolute;
            top: 7%;
            left: 26%;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: rgb(11, 5, 176)
        }

        .logo-image {
            position: absolute;
            top: 2%;
            left: 78%;
        }
        .border{
            border-bottom:2px solid 
        }
    </style>
</head>

<body>


    <section class="performance-facts">
        <header class="performance-facts__header">
            <div class="logo-img">
                <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="Logos">
            </div>
            <div class="heading-header ">
                Warehouse and Leveling Management
            </div>
            <div class="logo-image">
                <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo" class="logo">
            </div>
        </header>


        {{-- <table class="performance-facts__table">
            <tbody >
                <tr style="border: 1px solid black;">
                    
                    <td colspan="2">
                        <b>Id</b>
                    </td>
                    <td>
                        <b>  0001</b>
                      
                    </td>
                </tr>

                <tr>
                    <th colspan="2">
                        <b>Batch Status</b>

                    </th>
                    <td>
                        <b>asdf</b>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <b>Item Code</b>

                    </th>
                    <td>
                        <b>45353</b>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <b>Item Name</b>

                    </th>
                    <td>
                        <b>fghfdghdfg</b>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <b>Location Code:</b>

                    </th>
                    <td>
                        <b>45353</b>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <b>Store</b>
                       
                    </th>
                    <td>
                        <b>40gm</b>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <b>Grn Batch Ide</b>
                        
                    </th>
                    <td>
                        <b>f525</b>
                    </td>
                </tr>
              
                
                <tr >
                    <th colspan="2">
                        <b>Arn Id </b>
                      
                    </th>
                    <td>
                        <b> fg6598</b>
                       
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="performance-facts__table--grid">
            <tbody>
                <tr>
                    <td colspan="2">
                        <b>Container No. </b>
                    </td>
                    <td>
                       <b>0045</b>
                    </td>
                </tr>
                <tr >
                    <td colspan="2">
                        <b>Container Status</b>
                    </td>
                    <td>
                        <b>ydtdrt</b>
                    </td>
                </tr>
            </tbody>
        </table>


        <table class="performance-facts__table--small small-info">
            <thead>
                <tr>
                    <td colspan="2"></td>
                    <th>Calories:</th>
                    <th>2,000</th>
                    <th>2,500</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">Total Fat</th>
                    <td>Less than</td>
                    <td>65g</td>
                    <td>80g</td>
                </tr>
                <tr>
                    <td class="blank-cell"></td>
                    <th>Saturated Fat</th>
                    <td>Less than</td>
                    <td>20g</td>
                    <td>25g</td>
                </tr>
                <tr>
                    <th colspan="2">Cholesterol</th>
                    <td>Less than</td>
                    <td>300mg</td>
                    <td>300 mg</td>
                </tr>
                <tr>
                    <th colspan="2">Sodium</th>
                    <td>Less than</td>
                    <td>2,400mg</td>
                    <td>2,400mg</td>
                </tr>
                <tr>
                    <th colspan="3">Total Carbohydrate</th>
                    <td>300g</td>
                    <td>375g</td>
                </tr>
                <tr>
                    <td class="blank-cell"></td>
                    <th colspan="2">Dietary Fiber</th>
                    <td>25g</td>
                    <td>30g</td>
                </tr>
            </tbody>
        </table> --}}

        <div class="content">
            <div class="info">
                <table>
                    <tr>
                        <td><strong>Patient Name:</strong> cfbf</td>
                    </tr>
                    <tr>
                        <td><strong>Patient Address:</strong>gfghg</td>
                    </tr>
                    <tr>
                        <td><strong>Doctor Name:</strong>fghnfghh</td>
                    </tr>
                    <tr>
                        <td><strong>Date of Service:</strong> cgdgd</td>
                    </tr>
                </table>
            </div>
            <div class="services">
                <h3>Services Provided</h3>
                <table>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="total">
                <h3>Total Amount</h3>
                <table>
                    <tr>
                        <td><strong>hfgfgfg</strong></td>
                    </tr>
                </table>
            </div>
    

    </section>


</body>

</html>