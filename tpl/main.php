<div id="pageContent" class="container d-flex justify-content-center mt-4">
      <div class="col-6 justify-content-center">  
        <h1 class="display-4 m-4">Generátor hesel</h1>
        <h3>Jak generátor používat</h3>
        <p>V pravé části zaškrtněte, jaké znakové sady chcete používat (základně jsou vybrané všechny znakové sady). Následně definujte "Délku hesla" (pouze číselná hodnota). Nyní stačí jen kliknout na tlačítko "Generovat" a nástroj vygeneruje náhodné heslo na základě vaší definice. <br><br><i>Hesla se nikde neukládají a není možné zpětně dohledat, jaké heslo jste si vygenerovali.</i></p>
        <hr>
        <h1 class="display-4 m-4">Password generator</h1>
        <h3>How to use generator?</h3>
        <p>On the right side check which characters you want to use for your password (by default, all character sets are selected). Then define "Password length" (numbers only). All thats left is to click on the "Generate" button and the tool will generate a random password based on your definition. <br><br><i>Passwords are not stored anywhere, and it is not possible to trace back what password you generated.</i></p>
      </div>
      <div id="legendDiv" class="mt-5 col-6">
        <div class="d-flex justify-content-center">
          <div id="checkBoxDiv" name="checkBoxDiv" class="col-lg-10">
            <h4 class="">Použít znakové sady:</h4>
            <ul class="list-group mt-2">
              <li class="list-group-item">
                <input id="lowercase" name="lowercase" type="checkbox" value="abcdefghijklmnopqrstuvwxyz" checked>
                <label for="lowercase">Malá písmena <span>(Lowercase letters)</span></label>
              </li>
              <li class="list-group-item">
                <input id="uppercase" name="uppercase" type="checkbox" value="ABCDEFGHIJKLMNOPQRSTUVWXYZ" checked>
                <label for="uppercase">Velká písmena <span>(Uppercase letters)</span></label>
              </li>
              <li class="list-group-item">
                <input id="numbers" name="numbers" type="checkbox" value="1234567890" checked>
                <label for="numbers">Čísla <span>(Numbers)</span></label>
              </li>
              <li class="list-group-item">
                <input id="special" name="special" type="checkbox" value="!@#$%^*()+=" checked>
                <label for="special">Speciální znaky <span>(Special characters)</span></label>
              </li>
            </ul>
            <ul class="list-group mt-2">
              <h4>Délka hesla:</h4>
              <li class="list-group-item">
                <label for="passLength">Délka hesla: <span>(Password length)</span></label>
                <input id="passLength" type="number" value="10">
              </li>
            </ul>
            <div class="row d-flex justify-content-end">
              <input type="submit" id="generate" class="btn btn-lg btn-primary mx-3 my-2" value="Generovat">
            </div>
            <h3>Heslo:</h3>
            <div id="outputDiv" class="">
              <textarea name="passwordOut" id="passOut" cols="40" rows="6"></textarea>
            </div>
          </div>
        </div>
        <br>
        <div class="">
        </div>
      </div>
    </div>