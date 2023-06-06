function calculateBudget() {
    const income = parseFloat(document.getElementById('income').value);
    const expenses = parseFloat(document.getElementById('expenses').value);
  
    const budgetResult = income - expenses;
  
    document.getElementById('budgetResult').innerHTML = `Budget: R${budgetResult.toFixed(2)}`;
  }
  
  function calculateSaving() {
    const initialAmount = parseFloat(document.getElementById('initialAmount').value);
    const monthlySavings = parseFloat(document.getElementById('monthlySavings').value);
    const interestRate = parseFloat(document.getElementById('interestRate').value) / 100;
  
    let savingAmount = initialAmount;
    for (let i = 1; i <= 12; i++) {
      savingAmount += monthlySavings;
      savingAmount += savingAmount * (interestRate / 12);
    }
  
    document.getElementById('savingResult').innerHTML = `Savings: R${savingAmount.toFixed(2)}`;
  }
  
  function calculateInvestment() {
    const investmentAmount = parseFloat(document.getElementById('investmentAmount').value);
    const investmentReturn = parseFloat(document.getElementById('investmentReturn').value) / 100;
    const investmentYears = parseInt(document.getElementById('investmentYears').value);
  
    const investmentResult = investmentAmount * Math.pow((1 + investmentReturn), investmentYears);
  
    document.getElementById('investmentResult').innerHTML = `Investment Value: R${investmentResult.toFixed(2)}`;
  }
  
  function calculateLoan() {
    const loanAmount = parseFloat(document.getElementById('loanAmount').value);
    const loanInterestRate = parseFloat(document.getElementById('loanInterestRate').value) / 100;
    const loanYears = parseInt(document.getElementById('loanYears').value);
  
    const monthlyInterestRate = loanInterestRate / 12;
    const numPayments = loanYears * 12;
  
    const loanResult =
      (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numPayments)) /
      (Math.pow(1 + monthlyInterestRate, numPayments) - 1);
  
    document.getElementById('loanResult').innerHTML = `Monthly Payment: R${loanResult.toFixed(2)}`;
  }