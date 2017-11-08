<h1>Lotus Hotel</h1>
Hi!
<span>We send Booking Code <strong style="font-size: 20px;">{!!$userMail!!}</strong>  of you from Lotus Hotel</span>

<br>
<br>
<table style="width:400px; border-left: 5px solid green; padding-left: 10px;">
	<tr>
		<td><strong>Check In Date</strong></td>
		<td>{!!$formdate!!}</td>
	</tr>
	<tr>
		<td><strong>Check Out Date</strong></td>
		<td>{!!$to!!}</td>
	</tr>
	<tr>
		<td><strong>Amount Date</strong></td>
		<td>{!!(strtotime($to) - strtotime($formdate))/3600/24!!}</td>
	</tr>
	<tr>
		<td><strong>Total</strong></td>
		<td><strong>{!!number_format($total)!!}</strong> VND</td>
	</tr>
</table>

Lotus Hotel, Pleased to welcome You. Thanks You!

