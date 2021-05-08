<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .foo{
		margin-top: 0;
		width: 100%;
		height: 700px;
		display:inline-flex;
  

	}	
		.co{
			margin-top: 150px;
			margin-left: 300px;
			width: 800px;
			
			font-family: sans-serif;
		}
		.month
		{
			text-align: center;
			background:rgb(225,184,182);
			font-size: 2.5em;
			letter-spacing: 1px;
			color: white;
			padding: 20px;
			border:1px solid skyblue;
		}
		table, th, td{
			width: 100%;
			table-layout: fixed;
			text-align: center;
			font-size: 17px;
			border-collapse: collapse;
			border:1px solid skyblue;

		}
		tr, th, td {
			padding: 15px;
		}
		th{
			background: #888;
			color: white;
		}
		td{
			background:#ffffff;
		}
		td:hover{
			background-color:aquamarine;
		}
    </style>
    </head>
    <div class="foo">
        <div class="co">
            <div class="month">
                <strong>Janar</strong><br />
                <strong>2021</strong>
            </div>
            <table>
                <tr>
                    <th>E Hene</th>
                    <th>E Marte</th>
                    <th>E Merkure</th>
                    <th>E Enjte</th>
                    <th>E Premte</th>
                    <th>E Shtune</th>
                    <th>E Diele</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                </tr>
            </table>
           
            <script>
                function startTime() {
                    var today = new Date();
                    var h = today.getHours();
                    var m = today.getMinutes();
                    var s = today.getSeconds();
                    // add a zero in front of numbers<10 m=checkTime(m);
                    s = checkTime(s);
                    document.getElementById('ora').innerHTML = h + ":" + m + ":" + s;
                    t = setTimeout(function () { startTime() }, 500);
                }
                function checkTime(i) {
                    if (i < 10) {
                        i = "0" + i;
                    }
                    return i;
                }



                var d = new Date();
                console.log(d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds());

                function change_background() {
                    if (d.getHours() > 12 && (d.getHours() < 23 && d.getMinutes() < 59)) {
                        document.body.style.backgroundColor = "#F7F3EB";
                    } else {
                        document.body.style.backgroundColor = "#dadada";
                    }
                }

                try {
                    change_background();
                    console.log('Backgroundi u ndryshua me sukses');
                } catch (TypeError) {
                    console.log('Tagu body nuk eshte krijuar ende, e shtojme ne onload.');
                    window.onload = function () {
                        change_background();
                    }
                }
            </script>


    
</body>
</html>