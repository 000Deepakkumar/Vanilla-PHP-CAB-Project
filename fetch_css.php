<style>
* {
  margin: 0;
  padding: 0;
}

body {
  display: flex;
  justify-content: center;
  margin-top: 2rem;
}

table {
  min-width: 50vw;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin: 0.5rem 0;
}

table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

table tr:nth-child(even) {
  background-color: #f2f2f2;
}

table tr:hover {
  background-color: #ddd;
}

thead tr {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: grey;
  color: white;
}
.btn{
  display: flex;
  justify-content: center;
  margin-top: 1rem;
}
#btn{
  color: white;
  background-color: rgb(86, 233, 86);
  border: none;
  border-radius: 4px;
  width: 4rem;
  height: 2.1rem;
  font-size: large
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding: 2rem;
  width: 65vw; 
  height: 70vh; 
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.myModal{
  margin-left: 1rem;
}
#myModal{
  max-width: 100vw;
}
</style>