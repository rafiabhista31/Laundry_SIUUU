const { constant, values } = require('lodash')

const form = document.querySelector('.form')
let ErrorMessage = []



function subTotal(harga, paket_id) {
    const total = harga * paket_id
    return total
}

function cekDiskon(subTotal) {
    let diskon 

    if (subTotal >= 30000){
        diskon = 25;
    } else if (subTotal >= 25000) {
        diskon = 20;
    } else if (subTotal >= 20000){
        diskon = 15;
    } else if (subTotal >= 15000){
        diskon = 10;
    } else if (subTotal >= 10000){
        diskon = 5;
    } else {
        diskon = 0;
    }
    return diskon

    function nilaiDiskon(harga, diskon){
        return harga * (diskon/100)
    }
    function jumlah(total, nilaiDis) {
        return total - nilaiDis
    }
    function validation(kodeinvoice, harga, qty, nama_paket) {
        if (kodeinvoice == '') {
            ErrorMessage.push('Kode Barang Harus Diisi !!')
        }
        if (harga == '') {
            ErrorMessage.push('Harga Harus Tidak boleh nol !!')
        }
        if (qty == '') {
            ErrorMessage.push('Jumlah Tidak Boleh Nol !!')
        }
        if (nama_paket) {
            ErrorMessage.push('Nama Paket Harus Diisi !!')
        }
    }
 }

    form.addEventListener('submit',('event') => {
        let kode_invoice = document.getElementById('kode_invoice').value;
        let harga = document.getElementById('harga').value;
        let total = document.getElementById('total').value;
        let nama_paket = document.getElementById('nama_paket').value;

        validation(kodeinvoice, harga, jumlahJual, namaPaket)

        if (ErrorMessage.length < 1) {
            const total = subTotal(harga, total)
            const diskon = cekDiskon(total)
            const nilaiDis = nilaiDiskon(total, diskon)
            const totalBayar = jumlahPembayaran(total, nilaiDis)

            document.getElementById('subtotal').value = `Rp ${total},-`;
            document.getElementById('diskon').value = `${diskon}%`;
            document.getElementById('total_diskon').value = `Rp ${nilaiDis},-`;
            document.getElementById('total').value = `Rp ${totalBayar},-`;
            } else {
                alert(ErrorMessage.join('\n'))
                ErrorMessage = []
            }
})