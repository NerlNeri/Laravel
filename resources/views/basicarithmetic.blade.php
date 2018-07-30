<h1> @if($op=='div')</h1>
@if($num1 == 0)
<h2> Operation: Division </h2>
Dividend: {{$num}} 
Divisor:  
"Error"

@else
Operation: Division
Dividend: {{$num}} 
Divisor:  {{$num1}} 
Quotient: 
{{$num/$num1}}

    @endif
    @endif

@if($op=='add')
@if($num1 == 0)
Operation: Addition
Addend: {{$num}} 
Adder:  
"Error"

@else
Operation: Addition
Addend: {{$num}} 
Adder:  {{$num1}} 
Sum:  
{{$num+$num1}}

    @endif
    @endif

@if($op=='sub')
@if($num1 == 0)
Operation: Subtraction
Dividend: {{$num}} 
Difference:  
"Error"

@else
Operation: Subtraction
Subtrahend: {{$num}} 
Minuend:  {{$num1}} 
Difference: 
{{$num-$num1}}

    @endif
    @endif


@if($op=='mul')
@if($num1 == 0)
Operation: Multiplication
Multiplicand: {{$num}} 
Multiplier:  
"Error"

@else
Operation: Multiplication
Multiplicand: {{$num}} 
Multiplier:  {{$num1}} 
Product: 
{{$num*$num1}}

    @endif
    @endif
