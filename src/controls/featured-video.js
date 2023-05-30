import { PluginDocumentSettingPanel } from '@wordpress/edit-post';

import { TextControl, ToggleControl } from '@wordpress/components';

import { compose } from '@wordpress/compose';

import { withSelect, withDispatch } from '@wordpress/data';

const FeaturedVideo = ( { postType, postMeta, setPostMeta } ) => {

   return ( 
   
        <>{ ( 'undefined' !== typeof postMeta ) && <PluginDocumentSettingPanel title='Featured Video' initialOpen="false">
                <TextControl
                    label='YouTube Video ID'
                    value={ postMeta._wsu_featured_video_youtube }
                    help=''
                    onChange={ ( value ) => setPostMeta( { _wsu_featured_video_youtube: value } ) }
                />
                <TextControl
                    label='Background/Autoplay Video (Vimeo Only)'
                    value={ postMeta._wsu_featured_video_vimeo }
                    help=''
                    onChange={ ( value ) => setPostMeta( { _wsu_featured_video_vimeo: value } ) }
                />
                <TextControl
                    label='Thumbnail Video (Vimeo Only)'
                    value={ postMeta._wsu_featured_thumbnail_video }
                    help='YouTube does not support background videos'
                    onChange={ ( value ) => setPostMeta( { _wsu_featured_thumbnail_video: value } ) }
                />
            </PluginDocumentSettingPanel> }
            </>
        )
}

export default compose( [
    withSelect( ( select ) => {
        return {
            postMeta: select( 'core/editor' ).getEditedPostAttribute( 'meta' ),
            postType: select( 'core/editor' ).getCurrentPostType(),
        };
    } ),
    withDispatch( ( dispatch ) => {
        return {
            setPostMeta( newMeta ) {
                dispatch( 'core/editor' ).editPost( { meta: newMeta } );
            }
        };
    } )
] )( FeaturedVideo );

