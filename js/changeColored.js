jQuery.fn.extend({
  changeColor: function(strumento) {
    const instr = {
      Piano : '#04BF8A',
      Bass: '#18298C',
      Drum: '#F2CF1D',
      Guitar: '#F29F05'
    };
    $(this).css('color', instr[strumento]);
  },
  changeBgColor: function(strumento) {
    const instr = {
      Piano : '#04BF8A',
      Bass: '#18298C',
      Drum: '#F2CF1D',
      Guitar: '#F29F05'
    };
    this.css('background-color', instr[strumento]);
  }
});
