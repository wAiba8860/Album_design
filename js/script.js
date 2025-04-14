$(document).ready(function(){
    $('.menu-btn').click(function(){
        $('.menu-btn-child').slideToggle();
    });
});

function submitForm() {

    var type = document.getElementById('type').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (type=="" || email=="" || message=="") {

        alert('必須項目をご記入ください');
        return false;
    
    } else {
        
        alert('お問い合わせありがとうございます\n担当の者がご対応いたしますのでしばらくお待ち下さい');
        document.getElementById('contactForm').submit();
        
    }
}

const table1 = document.querySelector('.deadline-plan-aiba');
const table2 = document.querySelector('.deadline-plan-hurry');
const answer1 = document.querySelector('.kit-use');
const answer2 = document.querySelector('.kit-not-use');
    
    table1.addEventListener('click', () => {
        if (table1.classList.contains('deadline-plan-aiba')) {
            table2.classList.remove('plan-clicked');
            table1.classList.add('plan-clicked');
        } else {
            return false;
        }
    });

    table2.addEventListener('click', () => {
        if (table2.classList.contains('deadline-plan-hurry')) {
            table1.classList.remove('plan-clicked');
            table2.classList.add('plan-clicked');
        } else {
            return false;
        }
    });

    answer1.addEventListener('click', () => {
        if (answer1.classList.contains('kit-use')) {
            answer2.classList.remove('plan-clicked');
            answer1.classList.add('plan-clicked');
        } else {
            return false;
        }
    });

    answer2.addEventListener('click', () => {
        if (answer2.classList.contains('kit-not-use')) {
            answer1.classList.remove('plan-clicked');
            answer2.classList.add('plan-clicked');
        } else {
            return false;
        }
    });


function selectPlan(plan) {
    document.getElementById('planInput').value = plan;
};

function selectKits(kitsSelect) {
    document.getElementById('kitsSelect').value = kitsSelect;
};