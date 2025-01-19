const canvasElement = document.getElementById('reportChart');
const reportData = JSON.parse(canvasElement.getAttribute('data-report'));

const subjectMapping = {
    toan: 'Math',
    ngu_van: 'Literature',
    ngoai_ngu: 'Foreign Language',
    vat_li: 'Physics',
    hoa_hoc: 'Chemistry',
    sinh_hoc: 'Biology',
    lich_su: 'History',
    dia_li: 'Geography',
    gdcd: 'Civic Education',
};

const ctx = canvasElement.getContext('2d');

const labels = Object.keys(reportData); 
const displayLabels = labels.map(subject => subjectMapping[subject] || subject);

const dataAbove8 = labels.map(subject => reportData[subject]['>=8']);
const dataBetween6And8 = labels.map(subject => reportData[subject]['>=6 && <8']);
const dataBetween4And6 = labels.map(subject => reportData[subject]['>=4 && <6']);
const dataBelow4 = labels.map(subject => reportData[subject]['<4']);


new Chart(ctx, {
    type: 'bar',
    data: {
        labels: displayLabels,
        datasets: [
            {
                label: '>= 8 score',
                data: dataAbove8,
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
            },
            {
                label: '6 <= score < 8',
                data: dataBetween6And8,
                backgroundColor: 'rgba(153, 102, 255, 0.6)',
            },
            {
                label: '4 <= score < 6',
                data: dataBetween4And6,
                backgroundColor: 'rgba(255, 206, 86, 0.6)',
            },
            {
                label: '< 4 score',
                data: dataBelow4,
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
            },
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
            }
        }
    }
});
