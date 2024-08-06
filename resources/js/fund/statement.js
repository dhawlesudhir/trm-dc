import { ApiClient } from "../modules/APIIntegration.js";
var statementData = null;

loadData();

function loadData() {
    const apiClient = new ApiClient();
    apiClient
        .get("statement")
        .then((response) => {
            // todo: response validation
            console.log("then", statementData);
            statementData = response.statement;
            populateTable(statementData);
        })
        .catch((error) => {
            console.log(error);
        });
}

// Assuming you have a table element with id "myTable"
const table = document.getElementById("statementsTable");

// Sample data
const data = [
    { id: 1, name: "John Doe", email: "johndoe@example.com" },
    { id: 2, name: "Jane Doe", email: "janedoe@example.com" },
    { id: 3, name: "Bob Smith", email: "bobsmith@example.com" },
];

// Function to populate the table
function populateTable(data) {
    // Clear the table body
    table.tBodies[0].innerHTML = "";

    // Loop through the data and create table rows
    data.forEach((item) => {
        const row = table.tBodies[0].insertRow();

        let descHtml = "";
        if (item.description) {
            let descText = item.description.split(" ");
            descText.forEach((text) => {
                descHtml += `<span class="badge badge-tag me-2 mb-2">${text}</span>`;
            });
        }

        let typeHtml = `<span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">CREDIT</span></span>`;
        if (item.type == "debit") {
            typeHtml = `<span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span class="badge-label">${item.type}</span></span>`;
        }

        let tr = `<tr class="hover-actions-trigger btn-reveal-trigger position-static">
            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold">${item.id}</a></td>
            <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-body-emphasis" href="todo">
                <div class="avatar avatar-m"><img class="rounded-circle" src='http://[::1]:5173/resources/img/team/32.webp' alt="" />
                </div>
                <p class="mb-0 ms-3 text-body-emphasis fw-bold">${item.user.first_name} ${item.user.last_name} </p>
            </a></td>
            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="todo">${item.user_id}</a></td>
            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="todo">${item.transaction_id}</a></td>
            <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary ps-4">${typeHtml}</td>
            <td class="total-orders align-middle white-space-nowrap fw-semibold text-end text-body-highlight">$ ${item.amount}</td>
            <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-body-emphasis">$ ${item.commission}</td>
            <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-body-emphasis">$ ${item.balance}</td>
            <td class="tags align-middle review pb-2 ps-1" style="min-width: 225px">
              ${descHtml}
            </td>
            <td class="last-order align-middle white-space-nowrap text-body-tertiary text-end">${item.created_at}</td>
        </tr>`;

        row.innerHTML = tr;
    });
}

var start = moment().subtract(29, "days");
var end = moment();

function cb(start, end) {
    $("#kt_daterangepicker_4").html(
        start.format("DD-MM-YYYY") + " - " + end.format("DD-MM-YYYY")
    );
    console.log(
        "A new date selection was made: " +
            start.format("DD-MM-YYYY") +
            " to " +
            end.format("DD-MM-YYYY")
    );
}

// Set the current financial year start and end dates
const currentYear = moment().year();
const previousFYStart = moment({
    year: currentYear - 1,
    month: 3,
    day: 1,
});

const previousFYEnd = moment({
    year: currentYear,
    month: 2,
}).endOf("M");

console.log(previousFYStart.format("DD-MM-YYYY")); // Previous financial year start date
console.log(previousFYEnd.format("DD-MM-YYYY")); // Previous financial year end date

$("#kt_daterangepicker_4").daterangepicker(
    {
        startDate: start,
        endDate: end,
        locale: {
            format: "DD-MMM-YYYY",
        },
        ranges: {
            Today: [moment(), moment()],
            Yesterday: [
                moment().subtract(1, "days"),
                moment().subtract(1, "days"),
            ],
            "Last 7 Days": [moment().subtract(6, "days"), moment()],
            "Last 30 Days": [moment().subtract(29, "days"), moment()],
            "This Month": [moment().startOf("month"), moment().endOf("month")],
            "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
            ],
            "Last financial year": [
                // moment("01-04-" + moment().subtract(1, "year")),
                previousFYStart,
                previousFYEnd,
            ],
        },
    },
    cb
);

cb(start, end);
