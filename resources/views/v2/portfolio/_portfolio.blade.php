 @foreach ($galleryImages as $galleryImage)

 <div class="project-block masonry-item {{ $myClasses[array_rand($myClasses)] }} col-md-6 col-sm-12" style="position: absolute; left: 672px; top: 1008px;">
 	<div class="inner-box">
 		<div class="image">
 			<a href="{{ $galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug) }}"><img src="{{ url($galleryImage->getImageInfo()) }}" alt=""></a>
 			<div class="content">
 				<h6><a href="{{ $galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug) }}">{{ $galleryImage->getCategory->name }}</a></h6>
 				<a class="arrow flaticon-right-arrow" href="{{ $galleryImage->getCategory->parent_id==0?url($galleryImage->getCategory->slug):url($galleryImage->getParent($galleryImage->getCategory->parent_id)->slug.'/'.$galleryImage->getCategory->slug) }}"></a>
 			</div>
 		</div>
 	</div>
 </div>
 @endforeach