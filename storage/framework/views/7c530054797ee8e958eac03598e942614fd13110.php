<div class="card card-small mb-3">
                <div class="card">
  <div class="card-header">
    Conteudo de SEO
  </div>
  <div class="card-body">
   <!-- <h5 class="card-title">Special title treatment</h5>-->
    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
    <label for="meta">Metadescrição</label>
     <input class="form-control form-control-lg mb-3" id="meta" type="text" name="metadescricao" placeholder="Metadescrição do Post" value="<?php echo e(isset($postEdit) ? ($postEdit->meta_description ? $postEdit->meta_description : '') : ''); ?>">
     <label for="chave">Palavras-Chaves</label>
     <input class="form-control form-control-lg mb-3" id="chave" type="text" name="keywords" placeholder="Insira palavras chaves separaas por virgulas" value="<?php echo e(isset($postEdit) ? ($postEdit->meta_keywords ? $postEdit->meta_keywords : '') : ''); ?>">
     <label for="tituloSEO">Titulo SEO</label>
     <input class="form-control form-control-lg mb-3" id="tituloSEO" name="tituloseo" type="text" placeholder="Titulo do SEO" value="<?php echo e(isset($postEdit) ? ($postEdit->seo_title ? $postEdit->seo_title : '') : ''); ?>">
                   
                

  </div>
</div>
 
                 
                  </div><?php /**PATH C:\xampp\htdocs\miniblog\resources\views/partials/autenticado/add-post-partials/seoCard.blade.php ENDPATH**/ ?>