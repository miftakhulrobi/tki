<script>
    const nilai = Array.from(document.querySelectorAll('[data-nilai]'));
    const b = nilai.filter(n => n.textContent.includes('B')).length;
    const c = nilai.filter(n => n.textContent.includes('C')).length;
    const k = nilai.filter(n => n.textContent.includes('K')).length;

    $('.data-b').text(b);
    $('.data-c').text(c);
    $('.data-k').text(k);
</script>