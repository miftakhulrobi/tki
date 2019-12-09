<script>
    const nilai = Array.from(document.querySelectorAll('[data-nilai]'));
    const mb = nilai.filter(n => n.textContent.includes('MB')).length;
    const bb = nilai.filter(n => n.textContent.includes('BB')).length;
    const bsh = nilai.filter(n => n.textContent.includes('BSH')).length;
    const bsb = nilai.filter(n => n.textContent.includes('BSB')).length;

    $('.data-mb').text(mb);
    $('.data-bb').text(bb);
    $('.data-bsh').text(bsh);
    $('.data-bsb').text(bsb);
</script>