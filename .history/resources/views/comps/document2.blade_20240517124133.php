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
  border-bottom: 2px solid black;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  /* padding: 0 0 0.25rem 0;
  margin: 0 0 0.5rem 0;
  p {
    margin: 0;
  } */
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


    </style>
</head>
<body>


{{-- <section class="performance-facts">
  <header class="performance-facts__header">
    <div class="logo-img">
        <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="Logo">
    </div>
    <div class="heading-header ">
        Warehouse and Leveling Management
    </div>
    <div class="logo-image">
        <img src="" alt="Logo" class="logo" style="scale: 3">
    </div>
  </header>
  

  <table class="performance-facts__table">
    <thead>
      <tr>
        <th colspan="3" class="small-info">
          Amount Per Serving
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th colspan="2">
          <b>Calories</b>
          200
        </th>
        <td>
          Calories from Fat
          130
        </td>
      </tr>
      <tr class="thick-row">
        <td colspan="3" class="small-info">
          <b>% Daily Value*</b>
        </td>
      </tr>
      <tr>
        <th colspan="2">
          <b>Total Fat</b>
          14g
        </th>
        <td>
          <b>22%</b>
        </td>
      </tr>
      <tr>
        <td class="blank-cell">
        </td>
        <th>
          Saturated Fat
          9g
        </th>
        <td>
          <b>22%</b>
        </td>
      </tr>
      <tr>
        <td class="blank-cell">
        </td>
        <th>
          Trans Fat
          0g
        </th>
        <td>
        </td>
      </tr>
      <tr>
        <th colspan="2">
          <b>Cholesterol</b>
          55mg
        </th>
        <td>
          <b>18%</b>
        </td>
      </tr>
      <tr>
        <th colspan="2">
          <b>Sodium</b>
          40mg
        </th>
        <td>
          <b>2%</b>
        </td>
      </tr>
      <tr>
        <th colspan="2">
          <b>Total Carbohydrate</b>
          17g
        </th>
        <td>
          <b>6%</b>
        </td>
      </tr>
      <tr>
        <td class="blank-cell">
        </td>
        <th>
          Dietary Fiber
          1g
        </th>
        <td>
          <b>4%</b>
        </td>
      </tr>
      <tr>
        <td class="blank-cell">
        </td>
        <th>
          Sugars
          14g
        </th>
        <td>
        </td>
      </tr>
      <tr class="thick-end">
        <th colspan="2">
          <b>Protein</b>
          3g
        </th>
        <td>
        </td>
      </tr>
    </tbody>
  </table>

  <table class="performance-facts__table--grid">
    <tbody>
      <tr>
        <td colspan="2">
          Vitamin A
          10%
        </td>
        <td>
          Vitamin C
          0%
        </td>
      </tr>
      <tr class="thin-end">
        <td colspan="2">
          Calcium
          10%
        </td>
        <td>
          Iron
          6%
        </td>
      </tr>
    </tbody>
  </table>

  <p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>

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
  </table>

  <p class="small-info">
    Calories per gram:
  </p>
  <p class="small-info text-center">
    Fat 9
    &bull;
    Carbohydrate 4
    &bull;
    Protein 4
  </p>

</section> --}}
<div class="max-w-lg mx-auto p-4 border border-zinc-300 shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center">
            <img src="https://placehold.co/50x50" alt="Logo" class="mr-2">
            <h1 class="text-lg font-bold">AGIO PHARMACEUTICALS LTD.</h1>
        </div>
        <h2 class="border px-2 py-1 text-sm">MATERIAL STATUS LABEL</h2>
    </div>
    <div class="grid grid-cols-2 gap-4 text-sm">
        <div><strong>Brand Name:</strong> RAIP00007</div>
        <div><strong>Item Description:</strong> PARACETAMOL BP(CRYSTALLINE POWDER)</div>
        <div><strong>Batch / Lot No:</strong> FP240901</div>
        <div><strong>UOM:</strong> KGS</div>
        <div><strong>Mfg. DT:</strong> 01/03/2024</div>
        <div><strong>Exp. DT:</strong> 28/02/2029</div>
        <div><strong>No. of Cont.:</strong> 40 Nos</div>
        <div><strong>Pack size:</strong> 50.00 KG</div>
        <div><strong>Cont. No:</strong> 01/40</div>
        <div><strong>Rec. Qty:</strong> 2000.00 KG</div>
        <div><strong>Manufacturer:</strong> Farmson Pharmaceuticals Pvt Ltd.</div>
        <div><strong>Supplier:</strong> Farmson Pharmaceuticals Pvt Ltd.</div>
        <div><strong>GRN No:</strong> MPN/2324/QCG/ARM/000974</div>
        <div><strong>GRN Date:</strong> 12.03.2024</div>
        <div><strong>Format No:</strong> SOP/S/IF3-01</div>
        <div><strong>Printed by:</strong> ANILB.MPN</div>
    </div>
    <div class="mt-4">
        <strong>Barcode:</strong>
        <img src="https://placehold.co/300x50" alt="Barcode">
    </div>
</div>

</body>
</html>