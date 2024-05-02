import { addFilter } from '@wordpress/hooks';
import { BlockControls } from '@wordpress/block-editor';
import { ToolbarButton } from '@wordpress/components';

const queryloopCarouselAttributes = (props) => {
    if (props.name === 'core/query') {
        props.attributes = {
            ...props.attributes,
            isCarousel: {
                type: 'boolean'
            }
        }
    }
    return props;
}
addFilter('editor.regiterBlockType', 'core/query', queryloopCarouselAttributes);

const queryloopCarouselBlockEdit = (BlockEdit) => (props) => {
    if (props.name === 'core/query') {

        const onChangeIsCarouselButton = () => {
            props.setAttributes({
                isCarousel: !props.attributes.isCarousel,
                className: (!props.attributes.isCarousel) ? props.attributes.className + ' is-carousel' : props.attributes.className.replace(' is-carousel', '')

            });
            
        }

        return <>
            <BlockEdit {...props} />
            <BlockControls>
                <ToolbarButton
                    label="Attiva carosello"
                    icon="ellipsis"
                    onClick={onChangeIsCarouselButton}
                    isPressed={props.attributes.isCarousel}
                />
            </BlockControls>
        </>;
    }
    return <BlockEdit {...props} />;
}

addFilter('editor.BlockEdit', 'core/query', queryloopCarouselBlockEdit);