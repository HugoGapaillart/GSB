<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Page Nouveau Rapport') }}
      </h2>
  </x-slot>

<div class="mt-8" style="margin-left: 20px">
    <div class="Nom">
        <a>Numéro du Rapport :</a>
        <input type="text" name="num_raport" value="" placeholder="Exemple: 1">
    </div><br>
    <div class="Nom">
        <a>Preaticien :</a>
        <select type="select" name="num_raport" value=""></select>
    </div><br>
    <div class="Nom">
        <a>Date et heure :</a>
        <input type="datetime-local" name="date" value="">
    </div><br>
    <div class="Nom">
        <a>Bilan :</a><br>
        <textarea name="bilan" rows="3" cols="30"></textarea>
    </div><br>
    <div class="Nom">
        <a>Motif :</a><br>
        <textarea name="bilan" rows="3" cols="30"></textarea>
    </div><br>
    <div class="Nom">
        <button name="val_rap" style="border:none; border-radius:12px; background-color:rgb(27, 115, 230); width:8%; color: white">Valider le rapport</button>
    </div>
</div>
<br>
<div class="mt-10" style="margin-left:20px">
    <button onclick="window.location.href='/rapport'" style="border:none; border-radius:12px; background-color:rgb(27, 115, 230); width:8%; color: white" type="button" >Nouveau rapport</button>
</div>

</x-app-layout>