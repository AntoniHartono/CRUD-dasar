<h1>Data Review</h1>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Order ID</th>
      <th>Product ID</th>
      <th>User ID</th>
      <th>Rating</th>
      <th>Review</th>
      <th>Tanggal Dibuat</th>
      <th>Tanggal Diedit</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($review as $a): ?>
      <tr>
        <td><?php echo $a['Review']['id'] ?></td>
        <td><?php echo $a['Review']['order'] ?></td>
        <td><?php echo $a['Review']['product'] ?></td>
        <td><?php echo $a['Review']['user'] ?></td>
        <td><?php echo $a['Review']['rating'] ?></td>
        <td><?php echo $a['Review']['review'] ?></td>
        <td><?php echo $a['Review']['created_at'] ?></td>
        <td><?php echo $a['Review']['updated_at'] ?></td>
        <td>
             <?php echo $this->Html->link('Ubah', array('action' => 'ubah', $a['Review']['id'])) ?>
             <?php echo $this->Html->link('Hapus', array('action' => 'hapus', $a['Review']['id']), array('confirm' => 'Anda yakin?')) ?>

        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

  <?php echo $this->Html->link('Tambah Review', array('action' => 'tambah')) ?>
